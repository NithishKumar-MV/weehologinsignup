const signInForm = document.querySelector('.sign-in-form');
const signUpForm = document.querySelector('.sign-up-form');
const container = document.querySelector('.container');

// Function to handle sign-in
async function signIn(email, password, phoneNumber) {
    try {
        const response = await fetch('/your-sign-in-endpoint', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email, password, phoneNumber }),
        });

        if (response.ok) {
            // Sign in successful, you can handle this as needed
            console.log('Sign in successful');
            // Redirect the user to the dashboard
            window.location.href = 'dashboard.html';
        } else {
            // Handle sign in error
            console.error('Sign in failed');
        }
    } catch (error) {
        console.error('An error occurred:', error);
    }
}

// Function to handle sign-up
async function signUp(name, email, password, confirmPassword) {
    try {
        const response = await fetch('/your-sign-up-endpoint', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ name, email, password, confirmPassword }),
        });

        if (response.ok) {
            // Sign up successful, you can handle this as needed
            console.log('Sign up successful');
        } else {
            // Handle sign up error
            console.error('Sign up failed');
        }
    } catch (error) {
        console.error('An error occurred:', error);
    }
}

signUpForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const name = signUpForm.querySelector('input[type="text"]').value;
    const email = signUpForm.querySelector('input[type="email"]').value;
    const password = signUpForm.querySelector('input[type="password"]').value;
    const confirmPassword = signUpForm.querySelector('input[type="confirmPassword"]').value;

    signUp( name, email, password, confirmPassword);
});

signInForm.addEventListener('submit', (e) => {
    e.preventDefault();
    // Perform sign in logic here
    // You can use AJAX or fetch to send the data to your server
    // Handle the response accordingly
    // Assuming successful login, you can redirect the user to the dashboard
    const email = signInForm.querySelector('input[type="email"]').value;
    const password = signInForm.querySelector('input[type="password"]').value;
    const phoneNumber = signInForm.querySelector('input[type="phoneNumber"]').value;

    signIn(email, password, phoneNumber);
    window.location.href = 'dashboard.html';
});

// Toggle between sign-in and sign-up forms
function toggleForms() {
    container.classList.toggle('sign-up-mode');
}

document.getElementById('sign-up-btn').addEventListener('click', toggleForms);
document.getElementById('sign-in-btn').addEventListener('click', toggleForms);