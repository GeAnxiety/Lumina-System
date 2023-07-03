// Get the sign-up form elements
const signUpForm = document.querySelector('.form.sign-up');
const signUpUsernameInput = signUpForm.querySelector('input[type="text"]');
const signUpEmailInput = signUpForm.querySelector('input[type="email"]');
const signUpPasswordInput = signUpForm.querySelector('input[type="password"]');
const signUpConfirmInput = signUpForm.querySelectorAll('input[type="password"]')[1];
const signUpButton = signUpForm.querySelector('button');

// Add event listener to sign-up button
signUpButton.addEventListener('click', () => 
{
    // Reset the border color
    signUpUsernameInput.style.borderColor = '';
    signUpEmailInput.style.borderColor = '';
    signUpPasswordInput.style.borderColor = '';
    signUpConfirmInput.style.borderColor = '';

    // Check if any field is empty
    if 
    (
        !signUpUsernameInput.value ||
        !signUpEmailInput.value ||
        !signUpPasswordInput.value ||
        !signUpConfirmInput.value
    ) 
    {
        // Highlight the empty fields with red border
        if (!signUpUsernameInput.value) 
        {
            signUpUsernameInput.style.borderColor = 'red';
        }
        
        if (!signUpEmailInput.value) 
        {
            signUpEmailInput.style.borderColor = 'red';
        }

        if (!signUpPasswordInput.value) 
        {
            signUpPasswordInput.style.borderColor = 'red';
        }

        if (!signUpConfirmInput.value) 
        {
            signUpConfirmInput.style.borderColor = 'red';
        }

        alert('Please fill in all the fields.');
        return;
    }

    // Verify special characters in the username
    const usernameRegex = /^[a-zA-Z0-9]*$/;
    if (!usernameRegex.test(signUpUsernameInput.value)) 
    {
        signUpUsernameInput.style.borderColor = 'red';
        alert('Username should not contain special characters.');
        return;
    }

    // Verify email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(signUpEmailInput.value)) 
    {
        signUpEmailInput.style.borderColor = 'red';
        alert('Please enter a valid email address.');
        return;
    }

    // Verify password length
    if (signUpPasswordInput.value.length < 8) 
    {
        signUpPasswordInput.style.borderColor = 'red';
        alert('Password should have a minimum of 8 characters.');
        return;
    }

    // Verify uppercase letter in the password
    const uppercaseRegex = /[A-Z]/;
    if (!uppercaseRegex.test(signUpPasswordInput.value)) 
    {
        signUpPasswordInput.style.borderColor = 'red';
        alert('Password should contain at least one uppercase letter.');
        return;
    }

    // Verify password confirmation
    if (signUpPasswordInput.value !== signUpConfirmInput.value) 
    {
        signUpConfirmInput.style.borderColor = 'red';
        alert('Password confirmation does not match.');
        return;
    }

    // Proceed to Home.php
    window.location.href = 'Home.php';
});