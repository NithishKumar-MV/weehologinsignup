"use strict";

document.getElementById('eventForm').addEventListener('submit', function (event) {
  event.preventDefault();
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var phone = document.getElementById('phone').value;
  var city = document.getElementById('city').value;
  var state = document.getElementById('state').value;
  var date = document.getElementById('date').value;
  var occasion = document.getElementById('occasion').value;
  var occasionSpecific = document.getElementById('occasionSpecificText').value; // You can now use the form data for further processing

  console.log('Name:', name);
  console.log('Email:', email);
  console.log('Phone:', phone);
  console.log('City:', city);
  console.log('State:', state);
  console.log('Date:', date);
  console.log('Occasion:', occasion);
  console.log('Occasion Specific:', occasionSpecific);
});
document.getElementById('occasion').addEventListener('change', function () {
  var occasionSpecificField = document.getElementById('occasionSpecific');

  if (this.value === 'personalParties') {
    occasionSpecificField.style.display = 'block';
  } else {
    occasionSpecificField.style.display = 'none';
    document.getElementById('occasionSpecificText').value = '';
  }
});
//# sourceMappingURL=bookanevent.dev.js.map
