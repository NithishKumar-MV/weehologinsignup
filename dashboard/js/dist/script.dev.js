"use strict";

var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
  el.classList.toggle("toggled");
};

function toggleDropdown() {
  var dropdown = document.getElementById("eventDropdown");
  dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
}

document.addEventListener('DOMContentLoaded', function () {
  // Get the form element
  var form = document.querySelector('form'); // Add event listener to form submit

  form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission
    // Get the form values

    var name = document.querySelector('#name').value;
    var phone = document.querySelector('#phone-number').value;
    var email = document.querySelector('#email').value;
    var city = document.querySelector('#city').value;
    var date = document.querySelector('#date').value; // Perform some action with the form data

    console.log('Name:', name);
    console.log('Phone Number:', phone);
    console.log('Email:', email);
    console.log('City:', city);
    console.log('Date:', date); // Reset the form inputs (optional)

    form.reset();
  });
});
//# sourceMappingURL=script.dev.js.map
