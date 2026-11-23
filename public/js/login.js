document.addEventListener('DOMContentLoaded', () => {
    const passwordInput = document.getElementById('password');
    const togglePasswordIcon = document.getElementById('togglePasswordIcon');
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

    if (togglePasswordIcon && passwordInput) {
        togglePasswordIcon.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    }
});
