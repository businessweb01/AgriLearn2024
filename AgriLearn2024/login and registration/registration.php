
<form action="" method="post">
        <div class="field">
            <input type="text" placeholder="Full Name" name="fullName" id="fullName" required value="<?php echo $fullName; ?>">
            <p class="error" id="fullNameError"><?php echo $fullNameError; ?></p>
        </div>
        <div class="field">
            <input type="email" placeholder="Email Address" name="email" id="email" required value="<?php echo $email; ?>" >
            <p class="error" id="emailError"><?php echo $emailError; ?></p>
        </div>
        <div class="field">
            <input type="password" placeholder="Password" name="password" id="password" required value="<?php echo $password; ?>" >
            <p class="error" id="passwordError"><?php echo $passwordError; ?></p>
        </div>
        <div class="field">
            <input type="password" placeholder="Confirm password" name="confirmPassword" id="confirmPassword" required>
            <p class="error" id="confirmPasswordError"><?php echo $confirmPasswordError; ?></p>
        </div>
        <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Signup" name="signup" id="signupButton">
        </div>
    </form>
