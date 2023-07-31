document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.sign-in-form');
  
    // Handle form submission
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent the default form submission behavior
  
      // Get the email input value
      const emailInput = form.querySelector('input[type="email"]');
      const email = emailInput.value;
  
      // Here you can perform the necessary steps to reset the password,
      // such as sending a request to the server, validating the email, etc.
      // For this example, we'll just log the email to the console.
      console.log('Reset password for email:', email);
    });
  });
  