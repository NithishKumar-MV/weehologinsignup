"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var loginForm = document.querySelector('.sign-in-form');
  loginForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the form from submitting normally

    var emailOrPhone = document.querySelector('input[type="email"]').value;
    var password = document.querySelector('input[type="password"]').value; // Basic validation (you can add more complex validation as needed)

    if (emailOrPhone === '' || password === '') {
      alert('Please fill in all fields.');
      return;
    } // Here, you would typically send this data to your server for authentication
    // For this example, let's assume the authentication is successful


    alert('Login successful!'); // Replace this with your actual authentication logic
  });
});
//# sourceMappingURL=login.dev.js.map
