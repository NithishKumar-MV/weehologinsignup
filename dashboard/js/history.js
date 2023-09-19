document.addEventListener("DOMContentLoaded", function () {
  // Function to fetch booking history and populate the DOM
  function fetchBookingHistory() {
    fetch("/get-booking-history") // Replace with your actual endpoint
      .then((response) => response.json())
      .then((data) => {
        var historyDetails = document.getElementById("historyDetails");
        historyDetails.innerHTML = "";

        if (data.length === 0) {
          historyDetails.innerHTML = "<p>No booking history available.</p>";
          return;
        }

        data.forEach((booking) => {
          var bookingDiv = document.createElement("div");
          bookingDiv.classList.add("booking-item");

          var eventDateTime = new Date(booking.date + " " + booking.time);
          var formattedDateTime = eventDateTime.toLocaleString();

          bookingDiv.innerHTML = `
            <p><strong>Last Event Booking on (Date&Time):</strong> ${formattedDateTime}</p>
            <p><strong>Occasion:</strong> ${booking.occasion}</p>
            <p><strong>User Name:</strong> ${booking.userName}</p>
            <p><strong>Phone Number:</strong> ${booking.phoneNumber}</p>
          `;

          historyDetails.appendChild(bookingDiv);
        });
      })
      .catch((error) => {
        console.error(error);
      });
  }

  // Fetch and display booking history on page load
  fetchBookingHistory();
});