 // Function to trigger input event on an element
 function triggerInputEvent(element) {
  const event = document.createEvent('HTMLEvents');
  event.initEvent('input', true, true);
  element.dispatchEvent(event);
  }

      // Function to check if there are any errors
      function checkErrors() {
          const fullNameError = document.getElementById('fullNameError').textContent;
          const emailError = document.getElementById('emailError').textContent;
          const passwordError = document.getElementById('passwordError').textContent;
          const confirmPasswordError = document.getElementById('confirmPasswordError').textContent;
          return (fullNameError !== '' || emailError !== '' || passwordError !== '' || confirmPasswordError !== '');
      }

      // Function to validate email format
      function validateEmail(email) {
          const regex = /^$|^[^\s@]+@[^\s@]+\.[^\s@]+$|^[\s]+$/;
          return regex.test(email);
      }

      // Function to validate name format
      function validateName(name) {
          const regex = /^[a-zA-Z'-.\s]*$|^[\s]+$/;
          return regex.test(name);
      }

      // Function to validate password length
      function validatePassword(password) {
          const regex = /^[^'"]*$/; // Password should not contain single or double quotes
          return password.length === 0 || (password.length >= 8 && regex.test(password));
      }
      // Function to format (without single and double quotes)
      function validatePasswordQuotes(password) {
          const regex = /^[^'"]*$/; // Password should not contain single or double quotes
          return regex.test(password);
      }

      // Function to disable or enable the submit button based on error presence
      function toggleSubmitButton() {
          const submitButton = document.getElementById('signupButton');
          submitButton.disabled = checkErrors();
      }

      // Add event listeners to input fields to monitor changes and perform validations
      const inputFields = document.querySelectorAll('input');
      inputFields.forEach(function(inputField) {
          inputField.addEventListener('input', function() {
              const fullName = document.getElementById('fullName').value;
              const email = document.getElementById('email').value;
              const password = document.getElementById('password').value;
              const confirmPassword = document.getElementById('confirmPassword').value;

              // Perform name validation
              const fullNameError = document.getElementById('fullNameError');
              if (!validateName(fullName)) {
                  fullNameError.textContent = 'Invalid full name format.';
              } else {
                  fullNameError.textContent = '';
              }

              // Perform email validation
              const emailError = document.getElementById('emailError');
              if (!validateEmail(email)) {
                  emailError.textContent = 'Invalid email format.';
              } else {
                  emailError.textContent = '';
              }

              // Perform password length and format validation
              const passwordError = document.getElementById('passwordError');
              if (!validatePassword(password)) {
                  passwordError.textContent = 'Password must be at least 8 characters long.';
              } else {
                  passwordError.textContent = '';
              }

              const passwordErrorQuotes = document.getElementById('passwordError');
              if (!validatePasswordQuotes(password)) {
                  passwordError.textContent = 'Invalid Password format.';
              } else {
                  passwordError.textContent = '';
              }

              // Perform password matching validation
              const confirmPasswordError = document.getElementById('confirmPasswordError');
              if (password !== confirmPassword) {
                  confirmPasswordError.textContent = 'Passwords do not match.';
              } else {
                  confirmPasswordError.textContent = '';
              }

              toggleSubmitButton();
          });

          // Trigger input event on each input field to monitor changes
          triggerInputEvent(inputField);
      });

      // Initially disable the submit button
      toggleSubmitButton();

      // Function to switch between login and signup forms
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
      document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

    // Disable keyboard shortcuts
    document.onkeydown = function (e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || // 'C'
             e.keyCode === 86 || // 'V'
             e.keyCode === 85 || // 'U'
             e.keyCode === 83 || // 'S'
             e.keyCode === 73 || // 'I'
             e.keyCode === 123   // F12
            )) {
            return false;
        }
    };