"use strict";

document.addEventListener("DOMContentLoaded", function () {
  // Function to fetch booking history and populate the DOM
  function fetchBookingHistory() {
    fetch("/get-booking-history") // Replace with your actual endpoint
    .then(function (response) {
      return response.json();
    }).then(function (data) {
      var historyDetails = document.getElementById("historyDetails");
      historyDetails.innerHTML = "";

      if (data.length === 0) {
        historyDetails.innerHTML = "<p>No booking history available.</p>";
        return;
      }

      data.forEach(function (booking) {
        var bookingDiv = document.createElement("div");
        bookingDiv.classList.add("booking-item");
        var eventDateTime = new Date(booking.date + " " + booking.time);
        var formattedDateTime = eventDateTime.toLocaleString();
        bookingDiv.innerHTML = "\n            <p><strong>Last Event Booking on (Date&Time):</strong> ".concat(formattedDateTime, "</p>\n            <p><strong>Occasion:</strong> ").concat(booking.occasion, "</p>\n            <p><strong>User Name:</strong> ").concat(booking.userName, "</p>\n            <p><strong>Phone Number:</strong> ").concat(booking.phoneNumber, "</p>\n            <p><strong>City:</strong> ").concat(booking.city, "</p>\n            <p><strong>Event Name:</strong> ").concat(booking.eventName, "</p>\n          ");
        historyDetails.appendChild(bookingDiv);
      });
    })["catch"](function (error) {
      console.error(error);
    });
  } // Fetch and display booking history on page load


  fetchBookingHistory();
});
//# sourceMappingURL=history.dev.js.map
