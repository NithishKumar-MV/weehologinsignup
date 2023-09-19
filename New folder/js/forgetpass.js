const resetPasswordForm = document.querySelector('.sign-in-form');
const container = document.querySelector('.container');

// Function to handle sending a password reset request
async function sendPasswordResetRequest(email) {
    try {
        const response = await fetch('/your-reset-password-endpoint', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email }),
        });

        if (response.ok) {
            // Password reset request successful, you can handle this as needed
            console.log('Password reset request sent');
            // Display a success message to the user
            // For example, you could show a message on the page or redirect to a confirmation page
        } else {
            // Handle error, for instance, email not found or server error
            console.error('Password reset request failed');
        }
    } catch (error) {
        console.error('An error occurred:', error);
    }
}

resetPasswordForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const email = resetPasswordForm.querySelector('input[type="email"]').value;
    
    if (email) {
        await sendPasswordResetRequest(email);
        // Assuming you want to show a success message
        // You can add code here to update the UI with a success message
    }
});