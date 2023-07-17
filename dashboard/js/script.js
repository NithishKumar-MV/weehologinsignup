var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
function toggleDropdown() {
  var dropdown = document.getElementById("eventDropdown");
  dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
}
document.addEventListener('DOMContentLoaded', function() {
  // Get the form element
  const form = document.querySelector('form');

  // Add event listener to form submit
  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the form values
    const name = document.querySelector('#name').value;
    const phone = document.querySelector('#phone-number').value;
    const email = document.querySelector('#email').value;
    const city = document.querySelector('#city').value;
    const date = document.querySelector('#date').value;

    // Perform some action with the form data
    console.log('Name:', name);
    console.log('Phone Number:', phone);
    console.log('Email:', email);
    console.log('City:', city);
    console.log('Date:', date);

    // Reset the form inputs (optional)
    form.reset();
  });
});
