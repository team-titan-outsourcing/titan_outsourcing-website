const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const togglePassword = document.getElementById('togglePassword');
const togglePasswords = document.getElementById('togglePasswords');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function togglePasswordVisibility(passwordInput, eyeIcon) {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}

togglePassword.addEventListener('click', function() {
    const passwordInput = document.getElementById('password');
    togglePasswordVisibility(passwordInput, this);
});

togglePasswords.addEventListener('click', function() {
    const passwordInput = document.getElementById('passwords');
    togglePasswordVisibility(passwordInput, this);
});