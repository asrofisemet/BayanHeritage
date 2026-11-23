<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Bayan Heritage</title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">

    <style>
        :root {
            --color-primary: #4A6741;
            --color-primary-dark: #3A5535;
            --color-brown: #5C3211;
            --color-brown-hover: #4A280D;
            --color-brown-disabled: #AD9887;
            --color-red: #E24949;
            --color-text: #2D3B2D;
            --color-text-muted: #6B7E6B;
            --color-border: #D8E0D4;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body.bh-signup-body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            color: var(--color-text);
            position: relative;
            overflow-x: hidden;
            background-color: #2F4A3A;
            background-image: url('<?= base_url('Assets/bayan_signup_bg.jpg') ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Ambient Dark/Blur Overlay over Bayan Photo */
        .bh-signup-overlay {
            position: fixed;
            inset: 0;
            background: linear-gradient(
                135deg,
                rgba(31, 51, 39, 0.45) 0%,
                rgba(0, 0, 0, 0.35) 40%,
                rgba(31, 51, 39, 0.55) 100%
            );
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 1;
        }

        /* Card Container matching Figma Screenshot */
        .bh-signup-card {
            background: #FFFFFF;
            width: 100%;
            max-width: 440px;
            padding: 2.25rem 2.25rem 2rem;
            border-radius: 20px;
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.35),
                0 0 1px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 10;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Back Arrow Button (Top-Left) */
        .bh-signup-back {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            color: var(--color-text);
            text-decoration: none;
            border-radius: 50%;
            transition: color 0.2s ease, background-color 0.2s ease;
            position: absolute;
            top: 1.75rem;
            left: 1.75rem;
        }

        .bh-signup-back:hover {
            color: var(--color-primary);
            background-color: rgba(74, 103, 65, 0.08);
        }

        .bh-signup-back svg {
            width: 22px;
            height: 22px;
        }

        /* Title: Centered, Dark Green */
        .bh-signup-title {
            text-align: center;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-top: 0.25rem;
            margin-bottom: 1.5rem;
            letter-spacing: 0.3px;
        }

        /* Form Inputs */
        .bh-form-group {
            margin-bottom: 0.85rem;
            position: relative;
        }

        .bh-form-input {
            width: 100%;
            padding: 11px 16px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.88rem;
            color: var(--color-text);
            background: #FFFFFF;
            border: 1px solid var(--color-border);
            border-radius: 8px;
            outline: none;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .bh-form-input::placeholder {
            color: #9CA3AF;
            font-weight: 400;
        }

        .bh-form-input:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(74, 103, 65, 0.15);
        }

        .bh-form-input.has-icon {
            padding-right: 44px;
        }

        /* Password Eye Toggle */
        .bh-password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6B7280;
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: none;
            padding: 4px;
            transition: color 0.2s ease;
        }

        .bh-password-toggle:hover {
            color: var(--color-text);
        }

        .bh-password-toggle svg {
            width: 20px;
            height: 20px;
        }

        /* Error Text */
        .bh-field-error {
            color: var(--color-red);
            font-size: 0.72rem;
            margin-top: 3px;
            margin-left: 2px;
            text-align: left;
            display: none;
        }

        .bh-field-error.show {
            display: block;
        }

        /* Center Red Warning (All field must be filled in) */
        .bh-all-field-warning {
            color: var(--color-red);
            font-size: 0.75rem;
            text-align: center;
            margin-top: 0.25rem;
            margin-bottom: 0.75rem;
            font-weight: 500;
        }

        .bh-all-field-warning.hidden {
            display: none;
        }

        /* Submit Button (Pill Shape) */
        .bh-btn-signup {
            width: 100%;
            padding: 13px 20px;
            background-color: var(--color-brown-disabled);
            color: #FFFFFF;
            border: none;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            font-weight: 700;
            cursor: not-allowed;
            letter-spacing: 0.3px;
            transition: background-color 0.25s ease, transform 0.15s ease, box-shadow 0.25s ease;
            box-shadow: 0 4px 14px rgba(92, 50, 17, 0.15);
        }

        .bh-btn-signup.is-valid {
            background-color: var(--color-brown);
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(92, 50, 17, 0.25);
        }

        .bh-btn-signup.is-valid:hover {
            background-color: var(--color-brown-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(92, 50, 17, 0.35);
        }

        .bh-btn-signup.is-valid:active {
            transform: translateY(0);
        }

        /* Footer Link */
        .bh-signup-footer {
            text-align: center;
            font-size: 0.8rem;
            color: var(--color-text-muted);
            margin-top: 1.25rem;
        }

        .bh-signup-footer a {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 600;
            margin-left: 2px;
            transition: color 0.2s ease, text-decoration 0.2s ease;
        }

        .bh-signup-footer a:hover {
            color: var(--color-primary-dark);
            text-decoration: underline;
        }

        /* Alert Notifications */
        .bh-alert {
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 0.82rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 8px;
            line-height: 1.4;
        }

        .bh-alert-error {
            background-color: #FEF2F2;
            color: #991B1B;
            border: 1px solid #FCA5A5;
        }

        .bh-alert-success {
            background-color: #F0FDF4;
            color: #166534;
            border: 1px solid #86EFAC;
        }

        /* Responsive on small devices */
        @media (max-width: 480px) {
            .bh-signup-card {
                padding: 2rem 1.5rem 1.75rem;
                border-radius: 16px;
            }

            .bh-signup-back {
                top: 1.25rem;
                left: 1.25rem;
            }

            .bh-signup-title {
                font-size: 1.25rem;
                margin-bottom: 1.25rem;
            }
        }
    </style>
</head>
<body class="bh-signup-body">

    <!-- Blur & Gradient Overlay over Bayan Mosque Photo -->
    <div class="bh-signup-overlay"></div>

    <div class="bh-signup-card">
        <!-- Back Arrow Button (Top-Left) -->
        <a href="<?= site_url('landing') ?>" class="bh-signup-back" aria-label="Kembali ke halaman utama">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </a>

        <!-- Centered Green Title -->
        <h1 class="bh-signup-title">Sign Up</h1>

        <!-- Flash Message: Success -->
        <?php if(session()->getFlashdata('signup_success')): ?>
            <div class="bh-alert bh-alert-success" role="alert">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span><?= session()->getFlashdata('signup_success') ?></span>
            </div>
            <script>
                setTimeout(function() {
                    window.location.href = '<?= site_url('/login') ?>';
                }, 2500); 
            </script>
        <?php endif; ?>

        <!-- Flash Message: Error -->
        <?php if(session()->getFlashdata('error')): ?>
            <div class="bh-alert bh-alert-error" role="alert">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
                <span><?= session()->getFlashdata('error') ?></span>
            </div>
        <?php endif; ?>

        <!-- Form Sign Up -->
        <form action="<?= base_url('/signup/process') ?>" method="POST" id="signUpForm">
            <?= csrf_field() ?>

            <!-- First Name Input -->
            <div class="bh-form-group">
                <input 
                    type="text" 
                    id="nama_depan"
                    name="nama_depan"
                    class="bh-form-input" 
                    placeholder="First Name"
                    value="<?= old('nama_depan') ?>"
                    required
                    autocomplete="given-name">
            </div>

            <!-- Last Name Input -->
            <div class="bh-form-group">
                <input 
                    type="text" 
                    id="nama_belakang"
                    name="nama_belakang"
                    class="bh-form-input" 
                    placeholder="Last Name"
                    value="<?= old('nama_belakang') ?>"
                    required
                    autocomplete="family-name">
            </div>

            <!-- Email Input -->
            <div class="bh-form-group">
                <input 
                    type="email" 
                    id="email" 
                    name="email"
                    class="bh-form-input" 
                    placeholder="Email"
                    value="<?= old('email') ?>"
                    required
                    autocomplete="email">
                <p id="emailError" class="bh-field-error">Email must contain "@"</p>
            </div>

            <!-- Username Input -->
            <div class="bh-form-group">
                <input 
                    type="text" 
                    id="username"
                    name="username"
                    class="bh-form-input" 
                    placeholder="Username"
                    value="<?= old('username') ?>"
                    required
                    autocomplete="username">
                <p id="usernameError" class="bh-field-error">Username must contain 8-20 characters</p>
            </div>

            <!-- Password Input with Toggle Icon -->
            <div class="bh-form-group">
                <input 
                    type="password"
                    id="password" 
                    name="password"
                    class="bh-form-input has-icon" 
                    placeholder="Password"
                    required
                    autocomplete="new-password">
                
                <button type="button" class="bh-password-toggle" id="togglePasswordBtn" aria-label="Lihat atau sembunyikan password">
                    <!-- Eye Slash Icon (Default: hidden) -->
                    <svg id="iconEyeSlash" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                        <line x1="1" y1="1" x2="23" y2="23"></line>
                    </svg>
                    <!-- Eye Open Icon (Hidden by default) -->
                    <svg id="iconEyeOpen" style="display: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </button>
                <p id="passwordError" class="bh-field-error">Password must contain 8-20 characters</p>
            </div>

            <!-- All field must be filled in warning (Red, Centered) -->
            <p id="allField" class="bh-all-field-warning">All field must be filled in</p>

            <!-- Sign Up Button (Pill shape) -->
            <button 
                type="submit"
                id="signUpBtn"
                class="bh-btn-signup"
                disabled>
                Sign Up
            </button>
        </form>

        <!-- Footer Text: Already have an account? Log In -->
        <p class="bh-signup-footer">
            Already have an account? 
            <a href="<?= base_url('/login') ?>">Log In</a>
        </p>
    </div>

    <!-- Interactive Script -->
    <script src="<?= base_url('js/signUp.js') ?>"></script>
</body>
</html>
