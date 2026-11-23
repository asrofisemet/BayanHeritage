<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Bayan Heritage</title>
    
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

        body.bh-login-body {
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
            background-image: url('<?= base_url('Assets/bayan_user_upload.jpg') ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Ambient Dark/Blur Overlay over Mosque Photo */
        .bh-login-overlay {
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
        .bh-login-card {
            background: #FFFFFF;
            width: 100%;
            max-width: 420px;
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
        .bh-login-back {
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

        .bh-login-back:hover {
            color: var(--color-primary);
            background-color: rgba(74, 103, 65, 0.08);
        }

        .bh-login-back svg {
            width: 22px;
            height: 22px;
        }

        /* Title: Centered, Dark Green */
        .bh-login-title {
            text-align: center;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-top: 0.25rem;
            margin-bottom: 1.75rem;
            letter-spacing: 0.3px;
        }

        /* Form Inputs */
        .bh-form-group {
            margin-bottom: 1rem;
            position: relative;
        }

        .bh-form-input {
            width: 100%;
            padding: 12px 16px;
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

        /* Forgot Password Link (Red, Right-aligned) */
        .bh-forgot-wrap {
            text-align: right;
            margin-top: -0.25rem;
            margin-bottom: 1.25rem;
        }

        .bh-forgot-link {
            font-size: 0.75rem;
            color: var(--color-red);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease, text-decoration 0.2s ease;
        }

        .bh-forgot-link:hover {
            text-decoration: underline;
            color: #B91C1C;
        }

        /* Submit Button (Pill, Warm Wood Brown) */
        .bh-btn-login {
            width: 100%;
            padding: 13px 20px;
            background-color: var(--color-brown);
            color: #FFFFFF;
            border: none;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 0.3px;
            transition: background-color 0.25s ease, transform 0.15s ease, box-shadow 0.25s ease;
            box-shadow: 0 4px 14px rgba(92, 50, 17, 0.25);
        }

        .bh-btn-login:hover {
            background-color: var(--color-brown-hover);
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(92, 50, 17, 0.35);
        }

        .bh-btn-login:active {
            transform: translateY(0);
        }

        /* Footer Link */
        .bh-login-footer {
            text-align: center;
            font-size: 0.8rem;
            color: var(--color-text-muted);
            margin-top: 1.25rem;
        }

        .bh-login-footer a {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 600;
            margin-left: 2px;
            transition: color 0.2s ease, text-decoration 0.2s ease;
        }

        .bh-login-footer a:hover {
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
            .bh-login-card {
                padding: 2rem 1.5rem 1.75rem;
                border-radius: 16px;
            }

            .bh-login-back {
                top: 1.25rem;
                left: 1.25rem;
            }

            .bh-login-title {
                font-size: 1.25rem;
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>
<body class="bh-login-body">

    <!-- Blur & Gradient Overlay over Mosque Background Photo -->
    <div class="bh-login-overlay"></div>

    <div class="bh-login-card">
        <!-- Back Arrow Button (Top-Left) -->
        <a href="<?= site_url('landing') ?>" class="bh-login-back" aria-label="Kembali ke halaman utama">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </a>

        <!-- Centered Green Title -->
        <h1 class="bh-login-title">Login</h1>

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

        <!-- Flash Message: Success -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="bh-alert bh-alert-success" role="alert">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        <?php endif; ?>

        <!-- Form Login -->
        <form action="<?= base_url('/login/process') ?>" method="POST" id="loginForm">
            <?= csrf_field() ?>

            <!-- Username Input -->
            <div class="bh-form-group">
                <input 
                    type="text" 
                    id="username"
                    name="username"
                    class="bh-form-input" 
                    placeholder="Username"
                    required
                    autocomplete="username">
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
                    autocomplete="current-password">
                
                <button type="button" class="bh-password-toggle" id="togglePasswordBtn" aria-label="Lihat atau sembunyikan password">
                    <!-- Eye Slash Icon (Default: hidden password) -->
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
            </div>

            <!-- Forgot Password (Right-aligned, Red) -->
            <div class="bh-forgot-wrap">
                <a href="<?= base_url('/forgotpass') ?>" class="bh-forgot-link">
                    Forgot Password?
                </a>
            </div>

            <!-- Log In Button (Brown Pill) -->
            <button type="submit" class="bh-btn-login">
                Log In
            </button>
        </form>

        <!-- Footer Text: Don't have any account? Sign Up -->
        <p class="bh-login-footer">
            Don't have any account? 
            <a href="<?= base_url('/signup') ?>">Sign Up</a>
        </p>
    </div>

    <!-- Interactive Logic: Password Visibility Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var passwordInput = document.getElementById('password');
            var toggleBtn = document.getElementById('togglePasswordBtn');
            var iconEyeSlash = document.getElementById('iconEyeSlash');
            var iconEyeOpen = document.getElementById('iconEyeOpen');

            if (toggleBtn && passwordInput) {
                toggleBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    var isPassword = passwordInput.getAttribute('type') === 'password';
                    
                    if (isPassword) {
                        passwordInput.setAttribute('type', 'text');
                        iconEyeSlash.style.display = 'none';
                        iconEyeOpen.style.display = 'block';
                    } else {
                        passwordInput.setAttribute('type', 'password');
                        iconEyeSlash.style.display = 'block';
                        iconEyeOpen.style.display = 'none';
                    }
                });
            }
        });
    </script>
</body>
</html>
