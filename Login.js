// Get the sign-in form elements
const signInForm = document.querySelector('.form.sign-in');
const signInUsernameInput = signInForm.querySelector('input[type="text"]');
const signInPasswordInput = signInForm.querySelector('input[type="password"]');
const signInButton = signInForm.querySelector('button');

// Add event listener to sign-in button
signInButton.addEventListener('click', () => 
{
    // Reset the border color
    signInUsernameInput.style.borderColor = '';
    signInPasswordInput.style.borderColor = '';

    // Check if any field is empty
    if (!signInUsernameInput.value || !signInPasswordInput.value)
    {
        // Highlight the empty fields with red border
        if (!signInUsernameInput.value) 
        {
            signInUsernameInput.style.borderColor = 'red';
        }
        
        if (!signInPasswordInput.value) 
        {
            signInPasswordInput.style.borderColor = 'red';
        }
        
        alert('Please fill in all the fields.');
        return;
    }

    // Verify username and password
    const username = 'Lightcom12';
    const password = 'Jireh030712';

    if 
    (
        signInUsernameInput.value === username &&
        signInPasswordInput.value === password
    ) 
    
    {
        // Proceed to Home.php
        window.location.href = 'Home.php';
    } 
    
    else 
    {
        alert('Invalid username or password.');
    }
});