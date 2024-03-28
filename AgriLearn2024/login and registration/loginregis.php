<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);
$fullName = $email = $password = $confirmPassword = "";
$fullNameError = $emailError = $passwordError = $confirmPasswordError = "";
$error_msg = "";
$activeTab = null;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["login"])) {
        // Login form submission
        $email = sanitize_input($_POST["email"]);
        $password = $_POST["password"]; // No need for sanitization

        // Validate input
        if (empty($email)) {
            $emailError = "Please enter your email.";
        }
        if (empty($password)) {
            $passwordError = "Please enter your password.";
        }
        if (!empty($email) && !empty($password)) {
            // Prepare and bind statement
            $stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
            $stmt->bind_param("ss", $email, $password);

            // Execute the statement
            $stmt->execute();

            // Get result
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Login successful
                echo "<script>alert('Login successful.');</script>";
            } else {
                // Login failed
                echo "<script>alert('Invalid email or password.');</script>";
            }

            $stmt->close();
        }
         // Set the active tab
    }

    if(isset($_POST["signup"])) {
        // Signup form submission
        $fullName = sanitize_input($_POST["fullName"]);
        $email = sanitize_input($_POST["email"]);
        $password = $_POST["password"]; // No need for sanitization
        $confirmPassword = $_POST["confirmPassword"]; // No need for sanitization
        $activeTab = "signup"; // Set the active tab
        
        // Validate full name format
        if (!preg_match("/^[a-zA-Z'-.\s]+$/", $fullName)) {
            $fullNameError = "Invalid full name format.";
            $error_msg = "Invalid input format.";
        }
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format.";
            $error_msg = "Invalid input format.";
        }
        // Check if email exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $emailError = "Please use a different email.";
            $error_msg = "Please use a different email.";
        }
        $stmt->close();
        
        // Validate password length and match
        if (strlen($password) < 8) {
            $passwordError = "Password must be at least 8 characters long.";
        }
        if ($password !== $confirmPassword) {
            $confirmPasswordError = "Passwords do not match.";
        }
        // Check if password contains single quotes or double quotes
        if (strpos($password, "'") !== false || strpos($password, '"') !== false) {
            $passwordError = "Invalid password format.";
        }

        // If no errors, proceed with signup
        if (empty($fullNameError) && empty($emailError) && empty($passwordError) && empty($confirmPasswordError)) {
            // Prepare and bind statement
            $stmt = $conn->prepare("INSERT INTO users (fullName, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $fullName, $email, $password);

            // Execute the statement
            if ($stmt->execute()) {
                echo "<script>alert('Signup successful.');</script>";
            } else {
                echo "<script>alert('Signup failed.');</script>";
            }

            $stmt->close();
        }
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginregis.css">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
        .errors{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="errors">
            <p><?php echo $error_msg; ?></p>
        </div>
        <div class="title-text">
            <div class="title login"><span class="Agri">Agri</span>Learn</div>
            <div class="title signup">Join <span class="Agri">Us </span>Now!</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
            <input type="radio" name="slide" id="login">
            <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <!-- Login Form -->
                <?php include 'login.php'; ?>
                <!-- Signup Form -->
                <?php include 'registration.php'; ?>
            </div>
        </div>
    </div>
<script src="loginregis.js"></script>

</body>
</html>
