const loginForm = document.getElementById('loginForm');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const errorMessageElement = document.getElementById('errorMessage');

loginForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();

    if (email === 'kichwakubwa@gmail.com' && password === '12345six') {
        console.log('Login successful');
        window.location.href = '/dashboard.php';
    } else {
        errorMessageElement.textContent = 'Invalid email or password';
        emailInput.value = '';
        passwordInput.value = '';
    }
});
