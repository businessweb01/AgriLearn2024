<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="index.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>AgriLearn</title>
</head>
<body>
    <header class="header">
        <div class="header_content">
            <a href="#" class="logo"><span class="Agri">Agri</span>Learn</a>
            <nav class="nav">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link">Home</a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">About</a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">Contact Us</a>
                    </li>
                    <li class="nav_item">
                        <a href="login and registration/loginregis.php" class="nav_link">
                            <button class="login-btn">Login</button>
                        </a>
                    </li>
                    <li class="nav_item">
                        <input type="checkbox" id="toggle" class="toggle-input">
                        <label for="toggle" class="toggle-label"></label>
                    </li>
                </ul>
            </nav>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>   
            </div>  
        </div>
    </header>
    <main class="main">
        <section class="home" id="home">
            <div class="home_content">
                <h1><span class="Agri">Agri</span>Learn</h1>
                <p>Empower your agriculture journey with Agrilearn! From crops to tech, we've got you covered. <br>Join now and unlock farming excellence!</p>
                <a href="login and registration/loginregis.php"><button class="btn-started btn-glow">Get Started</button></a>
            </div>
        </section>
        <section class="advertisement">
            <div class="advertisement_content">
                <img src="images\phone.png" alt="" class="phone-img">
                <h1>Unlock the Power of Mobility</h1>
                <p>Enjoy Seamless Access Across Devices, Anywhere, Anytime!</p>
            </div>
        </section>
        <section class="horizonatal-line"><div class="line"></div></section>
        <h1 style="text-align: center; font-size: clamp(2.5rem, 3vw, 5rem);" id="about">About Us</h1>
        <section class="about">
                <div class="mission" style="background-color: #EBF5FB;">
                    <h1 style="text-align: center">Our Mission</h1>
                    <p>At AgriLearn, our mission is to provide accessible and practical e-learning solutions for agriculture. We aim to empower learners with the knowledge and skills they need to drive sustainable farming practices and enhance agricultural productivity worldwide.</p>
                </div>
                <div class="vision" style="background-color: #EBF5FB; text-align: center">
                    <h1>Our Vision</h1> 
                    <p>Our vision at AgriLearn is to be the leading provider of agricultural e-learning, making high-quality education accessible to all. We envision a future where our platform empowers individuals to thrive in agriculture, fostering sustainable practices and shaping a prosperous agricultural landscape.</p>
                </div>
        </section>
        <h1 style="text-align: center; font-size: clamp(2.5rem, 3vw, 5rem);">Our Team</h1>
        <div class="members">
            <div class="member1"></div>
            <div class="member2"></div>
            <div class="member3"></div>
         </div>
    </main>
    <section class="horizonatal-line"><div class="line"></div></section>
    <div id="emailPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Contact Us</h2>
            <p>Send us an email:</p>
            <form action="https://api.web3forms.com/submit" method="POST">
                <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="hidden" name="access_key" value="f497ac45-5f6b-4554-8591-cf4c1b7d17f5"> 
                    <input type="text" id="name" name="name" placeholder="Your name...">
                </div>
                <div class="form-group">
                    <label for="email">Your email:</label>
                    <input type="email" id="email" name="email" placeholder="Your email...">
                </div>
                <textarea name="message" placeholder="Your message..." rows="4" cols="50"></textarea>
                <br>
                <input type="hidden" name="redirect" value="https://web3forms.com/success">
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
    <footer>
        <div class="contact_content" style="text-align: center;margin-top: 2rem; margin-bottom: 2rem;" id="contact">
            <h2 style="font-size: clamp(1.25rem, 1vw, 1.75rem);">Feel free to message us!</h2>
            <img src="images/message (HD).png" alt="" style="display: block; margin: 0 auto; max-width: 100px; height: auto; width: 100%;">
                <button class="email-btn" onclick="openPopup()">Send Us an Email<i class='bx bxs-envelope'></i></button>
        </div>
        <div class="end">
            <i class='bx bxl-facebook-circle'></i>
            <p>AgriLearn@2024</p>
            <i class='bx bxl-instagram'></i>
            <p>AgriLearn_2024</p>
        </div>
        <p style="text-align: center;">&copy; 2023 AgriLearn. All rights reserved.</p>
    </footer>
    <script>
          document.body.style.backgroundImage = 'linear-gradient(180deg, #C8C1AC,#FFE794)';
          document.body.style.backgroundImage = 'linear-gradient(180deg, #C8C1AC,#FFE794)';
        const toggleInput = document.querySelector('.toggle-input');

            toggleInput.addEventListener('change', function() {
        if (this.checked) {
            document.body.style.backgroundImage = 'linear-gradient(180.2deg, rgb(30, 33, 48) 6.8%, rgb(74, 98, 110) 131%)'; // Dark mode background color
            document.querySelector("h1").style.color = "white";
            document.querySelector("h2").style.color = "white";
            document.querySelector("p").style.color = "white";
            document.querySelector(".btn-started").style.color = "white";
            document.querySelector(".btn-started").style.outline = "1px solid white";
            document.querySelector(".email-btn").style.borderColor = "white";
            document.querySelector(".email-btn").style.color = "white";
            document.querySelector("main").style.color = "white";
            document.querySelector("footer").style.color = "white";



        } else {
            document.body.style.backgroundImage = 'linear-gradient(180deg, #C8C1AC,#FFE794)';// Light mode background color
            document.querySelector("h1").style.color = "black";
            document.querySelector("h2").style.color = "black";
            document.querySelector("p").style.color = "black";
            document.querySelector(".btn-started").style.color = "black";
            document.querySelector(".btn-started").style.outline = "1px solid black";
            document.querySelector(".email-btn").style.borderColor = "black";
            document.querySelector(".email-btn").style.color = "black";
            document.querySelector("main").style.color = "black";
            document.querySelector("footer").style.color = "black";
            
        }
        });  
        // Smooth scroll animation with prevention of default behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent default behavior

                const target = document.querySelector(this.getAttribute('href')); // Get the target element
                const duration = 600; // Specify animation duration (milliseconds)
                const padding = 5 * parseFloat(getComputedStyle(document.documentElement).fontSize); // Calculate padding (5rem to pixels)

                scrollTo(target, duration, padding); // Call the scroll animation function with padding

                // Scroll animation function
                function scrollTo(target, duration, padding) {
                    const targetPosition = target.offsetTop - padding; // Get the position of the target element with padding
                    const startPosition = window.pageYOffset; // Get the current scroll position
                    const distance = targetPosition - startPosition; // Calculate the distance to scroll
                    const startTime = performance.now(); // Get the start time of the animation

                    // Animation function
                    function animation(currentTime) {
                        const timeElapsed = currentTime - startTime; // Calculate the time elapsed since animation start
                        const progress = Math.min(timeElapsed / duration, 1); // Calculate the progress of the animation (0 to 1)
                        const ease = easeOutQuad(progress); // Apply easing function
                        window.scrollTo(0, startPosition + distance * ease); // Scroll to the new position

                        // Continue the animation until duration is reached
                        if (timeElapsed < duration) {
                            requestAnimationFrame(animation); // Call animation recursively
                        }
                    }

                    // Easing function for smooth animation
                    function easeOutQuad(t) {
                        return t * (2 - t);
                    }

                    // Start the animation
                    requestAnimationFrame(animation);
                }
            });
        });

        // Function to open popup
        function openPopup() {
            document.getElementById("emailPopup").style.display = "block";
        }

        // Function to close popup
        function closePopup() {
            document.getElementById("emailPopup").style.display = "none";
        }

        // Show popup when email button is clicked
        document.querySelector('.email-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action of the anchor link
            openPopup(); // Open the popup
        });
    </script>
</body>
</html>
