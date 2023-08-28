"use strict";

var resetPasswordForm = document.querySelector('.sign-in-form');
var container = document.querySelector('.container'); // Function to handle sending a password reset request

function sendPasswordResetRequest(email) {
  var response;
  return regeneratorRuntime.async(function sendPasswordResetRequest$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.prev = 0;
          _context.next = 3;
          return regeneratorRuntime.awrap(fetch('/your-reset-password-endpoint', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              email: email
            })
          }));

        case 3:
          response = _context.sent;

          if (response.ok) {
            // Password reset request successful, you can handle this as needed
            console.log('Password reset request sent'); // Display a success message to the user
            // For example, you could show a message on the page or redirect to a confirmation page
          } else {
            // Handle error, for instance, email not found or server error
            console.error('Password reset request failed');
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
}

resetPasswordForm.addEventListener('submit', function _callee(e) {
  var email;
  return regeneratorRuntime.async(function _callee$(_context2) {
    while (1) {
      switch (_context2.prev = _context2.next) {
        case 0:
          e.preventDefault();
          email = resetPasswordForm.querySelector('input[type="email"]').value;

          if (!email) {
            _context2.next = 5;
            break;
          }

          _context2.next = 5;
          return regeneratorRuntime.awrap(sendPasswordResetRequest(email));

        case 5:
        case "end":
          return _context2.stop();
      }
    }
  });
});
//# sourceMappingURL=forgetpass.dev.js.map
