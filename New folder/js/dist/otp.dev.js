"use strict";

// JavaScript code in otp.js
function moveToNext(input, nextInputId) {
  var maxLength = parseInt(input.getAttribute('maxlength'));
  var currentLength = input.value.length;

  if (currentLength === maxLength) {
    if (nextInputId !== input.id) {
      document.getElementById(nextInputId).removeAttribute('disabled');
      document.getElementById(nextInputId).focus();
    } else {
      // If the current input is the last one, submit the form or take further action
      document.getElementById('otpForm').submit();
    }
  }
}

function moveToPrev(input, prevInputId) {
  if (input.value.length === 0 && prevInputId !== input.id) {
    document.getElementById(prevInputId).removeAttribute('disabled');
    document.getElementById(prevInputId).focus();
  }
} // Add event listeners for handling backspace key press


document.getElementById('input2').addEventListener('keyup', function (event) {
  if (event.key === 'Backspace') {
    moveToPrev(this, 'input1');
  }
});
document.getElementById('input3').addEventListener('keyup', function (event) {
  if (event.key === 'Backspace') {
    moveToPrev(this, 'input2');
  }
});
document.getElementById('input4').addEventListener('keyup', function (event) {
  if (event.key === 'Backspace') {
    moveToPrev(this, 'input3');
  }
});
var inputs = document.querySelectorAll("input"),
    button = document.querySelector("button");
inputs.forEach(function (input, index1) {
  input.addEventListener("keyup", function (e) {
    var currentInput = input,
        nextInput = input.nextElementSibling,
        prevInput = input.previousElementSibling;

    if (currentInput.value.length > 1) {
      currentInput.value = "";
      return;
    }

    if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
      nextInput.removeAttribute("disabled");
      nextInput.focus();
    }

    if (e.key === "Backspace") {
      inputs.forEach(function (input, index2) {
        if (index1 <= index2 && prevInput) {
          input.setAttribute("disabled", true);
          input.value = "";
          prevInput.focus();
        }
      });
    }

    if (!inputs[3].disabled && inputs[3].value !== "") {
      button.classList.add("active");
      return;
    }

    button.classList.remove("active");
  });
});
window.addEventListener("load", function () {
  return inputs[0].focus();
});
//# sourceMappingURL=otp.dev.js.map
