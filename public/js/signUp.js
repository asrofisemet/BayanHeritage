document.addEventListener('DOMContentLoaded', () => {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const passwordInput = document.getElementById('password');
    const passwordError = document.getElementById('passwordError');
    const usernameInput = document.getElementById('username');
    const usernameError = document.getElementById('usernameError');
    const namaDepanInput = document.getElementById('nama_depan');
    const namaBelakangInput = document.getElementById('nama_belakang');
    const allField = document.getElementById('allField');
    const signUpBtn = document.getElementById('signUpBtn');

    // Password visibility toggle
    const toggleBtn = document.getElementById('togglePasswordBtn');
    const iconEyeSlash = document.getElementById('iconEyeSlash');
    const iconEyeOpen = document.getElementById('iconEyeOpen');

    if (toggleBtn && passwordInput) {
        toggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            if (iconEyeSlash && iconEyeOpen) {
                iconEyeSlash.style.display = isPassword ? 'none' : 'block';
                iconEyeOpen.style.display = isPassword ? 'block' : 'none';
            }
        });
    }

    function checkFormAndDisplayErrors() {
        const firstName = namaDepanInput ? namaDepanInput.value.trim() : "";
        const lastName = namaBelakangInput ? namaBelakangInput.value.trim() : "";
        const email = emailInput ? emailInput.value.trim() : "";
        const username = usernameInput ? usernameInput.value.trim() : "";
        const password = passwordInput ? passwordInput.value : "";

        const isAllFieldsFilled = firstName !== "" && lastName !== "" && email !== "" && username !== "" && password !== "";

        if (allField) {
            if (isAllFieldsFilled) {
                allField.classList.add('hidden');
            } else {
                allField.classList.remove('hidden');
            }
        }

        // Username validation (8-20 characters)
        if (usernameError && usernameInput) {
            if (username !== "") {
                if (username.length < 8 || username.length > 20) {
                    usernameError.classList.add('show');
                } else {
                    usernameError.classList.remove('show');
                }
            } else {
                usernameError.classList.remove('show');
            }
        }

        // Email validation (must contain '@')
        if (emailError && emailInput) {
            if (email !== "") {
                if (!email.includes('@')) {
                    emailError.classList.add('show');
                } else {
                    emailError.classList.remove('show');
                }
            } else {
                emailError.classList.remove('show');
            }
        }

        // Password validation (8-20 characters)
        if (passwordError && passwordInput) {
            if (password !== "") {
                if (password.length < 8 || password.length > 20) {
                    passwordError.classList.add('show');
                } else {
                    passwordError.classList.remove('show');
                }
            } else {
                passwordError.classList.remove('show');
            }
        }

        const isFirstNameValid = firstName !== "";
        const isLastNameValid = lastName !== "";
        const isUsernameValid = username.length >= 8 && username.length <= 20;
        const isEmailValid = email.includes('@') && email !== "";
        const isPasswordValid = password.length >= 8 && password.length <= 20;

        const isFormCompletelyValid = isFirstNameValid && isLastNameValid && isUsernameValid && isEmailValid && isPasswordValid;

        if (signUpBtn) {
            if (isFormCompletelyValid) {
                signUpBtn.classList.add('is-valid');
                signUpBtn.disabled = false;
            } else {
                signUpBtn.classList.remove('is-valid');
                signUpBtn.disabled = true;
            }
        }
    }

    if (namaDepanInput) namaDepanInput.addEventListener('input', checkFormAndDisplayErrors);
    if (namaBelakangInput) namaBelakangInput.addEventListener('input', checkFormAndDisplayErrors);
    if (emailInput) emailInput.addEventListener('input', checkFormAndDisplayErrors);
    if (usernameInput) usernameInput.addEventListener('input', checkFormAndDisplayErrors);
    if (passwordInput) passwordInput.addEventListener('input', checkFormAndDisplayErrors);

    // Initial check in case fields are prefilled
    checkFormAndDisplayErrors();
});
