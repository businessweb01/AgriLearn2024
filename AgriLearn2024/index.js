
    const hamburgerNav = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav");
    
    hamburgerNav.addEventListener("click", () => {
        navMenu.classList.toggle("nav--open");
        hamburgerNav.classList.toggle("hamburger--open");
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Select all anchor links with href starting with #
        const scrollLinks = document.querySelectorAll('a[href^="#"]');
        
        // Iterate over each scroll link
        for (const scrollLink of scrollLinks) {
            // Add click event listener to each scroll link
            scrollLink.addEventListener('click', function (e) {
                // Prevent default link behavior (jumping to anchor)
                e.preventDefault();
                
                // Get the target ID from the href attribute
                const targetId = this.getAttribute('href').substring(1);
                
                // Find the target element by its ID
                const targetElement = document.getElementById(targetId);
                
                // Check if target element exists
                if (targetElement) {
                    // Scroll to the target element with smooth animation
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        }
    });

