function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; /*checking if the email adress format is correct */
    return emailRegex.test(email);
}

document.addEventListener('DOMContentLoaded', function () {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');

    emailInput.addEventListener('input', function () {
        var emailValue = emailInput.value;
        emailError.innerHTML = '';

        if (emailValue.trim() === '') {
            emailError.innerHTML = 'Email is required';
        } else if (!validateEmail(emailValue)) {
            emailError.innerHTML = 'Please enter a valid email address in the format xxx@yyy.com.';
        }
    });
});
