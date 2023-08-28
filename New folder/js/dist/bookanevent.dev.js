"use strict";

document.addEventListener("DOMContentLoaded", function () {
  // Function to handle booking event form submission
  function bookEvent() {
    // Collect form data
    var occasion = document.getElementById("occasion").value;
    var userName = document.getElementById("name").value;
    var phoneNumber = document.getElementById("phone-number").value;
    var emailId = document.getElementById("email").value;
    var city = document.getElementById("city").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value; // Perform data validation here
    // Send data to server-side script using fetch

    fetch("/submit", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        occasion: occasion,
        userName: userName,
        phoneNumber: phoneNumber,
        emailId: emailId,
        city: city,
        date: date,
        time: time
      })
    }).then(function (response) {
      return response.json();
    }).then(function (data) {
      // Handle success response
      console.log(data);
      alert("Event booked successfully!");
    })["catch"](function (error) {
      // Handle error
      console.error(error);
      alert("Error booking event. Please try again.");
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
      // Call a function to store booking data in the database
      storeBookingData(selectedDate, selectedTime); // You can also proceed with form submission or other actions here

      alert("Booking data stored successfully.");
    }
  }

  function storeBookingData(occasion, userName, phoneNumber, emailId, city, date, time) {
    var bookingDetails = {
      occasion: occasion,
      userName: userName,
      phoneNumber: phoneNumber,
      emailId: emailId,
      city: city,
      date: date,
      time: time
    }; // AJAX request to your server to store the data

    fetch("/store-booking-data", {
      method: "POST",
      body: JSON.stringify(bookingDetails),
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
  } // Attach the bookEvent function to the form submit event


  document.getElementById("event-form").addEventListener("submit", function (event) {
    event.preventDefault();
    bookEvent();
  }); // Attach the validateDateTime function to the date and time input change events

  document.getElementById("date").addEventListener("change", validateDateTime);
  document.getElementById("time").addEventListener("change", validateDateTime);
});
//# sourceMappingURL=bookanevent.dev.js.map
