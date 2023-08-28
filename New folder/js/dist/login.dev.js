"use strict";

var signInForm = document.querySelector('.sign-in-form');
var signUpForm = document.querySelector('.sign-up-form');
var container = document.querySelector('.container'); // Function to handle sign-in

function signIn(email, password, phoneNumber) {
  var response;
  return regeneratorRuntime.async(function signIn$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.prev = 0;
          _context.next = 3;
          return regeneratorRuntime.awrap(fetch('/your-sign-in-endpoint', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              email: email,
              password: password,
              phoneNumber: phoneNumber
            })
          }));

        case 3:
          response = _context.sent;

          if (response.ok) {
            // Sign in successful, you can handle this as needed
            console.log('Sign in successful'); // Redirect the user to the dashboard

            window.location.href = 'dashboard.html';
          } else {
            // Handle sign in error
            console.error('Sign in failed');
          }

          _context.next = 10;
          break;

        case 7:
          _context.prev = 7;
          _context.t0 = _context["catch"](0);
          console.error('An error occurred:', _context.t0);

        case 10:
        case "end":
          return _context.stop();
      }
    }
  }, null, null, [[0, 7]]);
} // Function to handle sign-up


function signUp(name, email, password, confirmPassword) {
  var response;
  return regeneratorRuntime.async(function signUp$(_context2) {
    while (1) {
      switch (_context2.prev = _context2.next) {
        case 0:
          _context2.prev = 0;
          _context2.next = 3;
          return regeneratorRuntime.awrap(fetch('/your-sign-up-endpoint', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              name: name,
              email: email,
              password: password,
              confirmPassword: confirmPassword
            })
          }));

        case 3:
          response = _context2.sent;

          if (response.ok) {
            // Sign up successful, you can handle this as needed
            console.log('Sign up successful');
          } else {
            // Handle sign up error
            console.error('Sign up failed');
          }

          _context2.next = 10;
          break;

        case 7:
          _context2.prev = 7;
          _context2.t0 = _context2["catch"](0);
          console.error('An error occurred:', _context2.t0);

        case 10:
        case "end":
          return _context2.stop();
      }
    }
  }, null, null, [[0, 7]]);
}

signUpForm.addEventListener('submit', function (e) {
  e.preventDefault();
  var name = signUpForm.querySelector('input[type="text"]').value;
  var email = signUpForm.querySelector('input[type="email"]').value;
  var password = signUpForm.querySelector('input[type="password"]').value;
  var confirmPassword = signUpForm.querySelector('input[type="confirmPassword"]').value;
  signUp(name, email, password, confirmPassword);
});
signInForm.addEventListener('submit', function (e) {
  e.preventDefault(); // Perform sign in logic here
  // You can use AJAX or fetch to send the data to your server
  // Handle the response accordingly
  // Assuming successful login, you can redirect the user to the dashboard

  var email = signInForm.querySelector('input[type="email"]').value;
  var password = signInForm.querySelector('input[type="password"]').value;
  var phoneNumber = signInForm.querySelector('input[type="phoneNumber"]').value;
  signIn(email, password, phoneNumber);
  window.location.href = 'dashboard.html';
}); // Toggle between sign-in and sign-up forms

function toggleForms() {
  container.classList.toggle('sign-up-mode');
}

document.getElementById('sign-up-btn').addEventListener('click', toggleForms);
document.getElementById('sign-in-btn').addEventListener('click', toggleForms);
//# sourceMappingURL=login.dev.js.map
