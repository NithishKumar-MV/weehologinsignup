function resetPassword() {
    const email = document.getElementById('email').value;
    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Validate email and passwords (you can add more validation if needed)
    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        return;
    }

    if (currentPassword === '') {
        alert('Please enter your current password.');
        return;
    }

    if (newPassword === '') {
        alert('Please enter a new password.');
        return;
    }

    if (newPassword !== confirmPassword) {
        alert('New password and confirm password do not match.');
        return;
    }

    // Send the email address, current password, and new password to the server for password reset process
    // Replace 'your-server-change-password-script.php' with the actual server-side script URL
    // You can use Ajax or fetch API to send the data to the server
    fetch('your-server-change-password-script.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email: email, currentPassword: currentPassword, newPassword: newPassword, confirmPassword }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response from the server
        // For example, show a success message or an error message based on the server response
        if (data.success) {
            alert('Password changed successfully.');
        } else {
            alert('Failed to change password. Please check your current password and try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again later.');
    });
}

function validateEmail(email) {
    // Simple email validation using regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}