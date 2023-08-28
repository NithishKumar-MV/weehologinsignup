"use strict";

function toggleDropdown(dropdownId) {
  var dropdown = document.getElementById(dropdownId);

  if (dropdown.style.display === "none" || dropdown.style.display === "") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
} // Function to toggle the sidebar


document.getElementById("menu-toggle").addEventListener("click", function () {
  var wrapper = document.getElementById("wrapper");
  wrapper.classList.toggle("toggled");
});

function createEvent() {
  // Collect form data
  var eventDetails = document.getElementById("eventDetails").value;
  var userName = document.getElementById("userName").value;
  var phoneNumber = document.getElementById("phoneNumber").value;
  var emailId = document.getElementById("emailId").value;
  var city = document.getElementById("city").value;
  var date = document.getElementById("date").value;
  var time = document.getElementById("time").value; // Perform data validation here
  // Send data to server-side script using AJAX or form submission
  // Example using AJAX (assuming you have jQuery)

  $.ajax({
    type: "POST",
    url: "create-event.php",
    data: {
      eventDetails: eventDetails,
      userName: userName,
      phoneNumber: phoneNumber,
      emailId: emailId,
      city: city,
      date: date,
      time: time
    },
    success: function success(response) {
      // Handle success response
      alert("Event created successfully!");
    },
    error: function error(xhr, status, _error) {
      // Handle error
      console.error(_error);
      alert("Error creating event. Please try again.");
    }
  });
}

function validateDateTime() {
  var selectedDate = new Date(document.getElementById("date").value);
  var selectedTime = document.getElementById("time").value;
  var currentDateTime = new Date();
  var selectedDateTime = new Date(selectedDate.toDateString() + " " + selectedTime);

  if (selectedDateTime <= currentDateTime) {
    alert("Please select a future date and time.");
  } else {
    // Call a function to store event data in the database
    storeEventData(selectedDate, selectedTime); // You can also proceed with form submission or other actions here

    alert("Event data stored successfully.");
  }
}

function storeEventData(date, time) {
  // Example AJAX request to store event data in the database
  var eventDetails = {
    eventName: eventName,
    userName: userName,
    phoneNumber: phoneNumber,
    emailId: emailId,
    city: city,
    date: date,
    time: time
  }; // Perform an AJAX request to your server to store the data

  fetch("/store-event-data", {
    method: "POST",
    body: JSON.stringify(eventDetails),
    headers: {
      "Content-Type": "application/json"
    }
  }).then(function (response) {
    return response.json();
  }).then(function (data) {
    // Handle success response
    console.log(data);
  })["catch"](function (error) {
    // Handle error
    console.error(error);
  });
}
//# sourceMappingURL=createanevent.dev.js.map
