<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'BayanHeritage' ?></title>
    
    <!-- Google Fonts: Playfair Display + Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
    
    <style>
        :root {
            --color-primary: #1B3828;
            --color-primary-dark: #142B1E;
            --color-accent: #5B8C51;
            --color-bg: #F8F6F0;
            --color-surface: #FFFFFF;
            --color-brown: #5C3211;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-bg);
            color: #2D3B2D;
            overflow-x: hidden;
        }

        .font-heading {
            font-family: 'Playfair Display', Georgia, serif;
        }

        .main-header-banner {
            background: linear-gradient(180deg, #153123 0%, #1A3828 100%);
            border-bottom-left-radius: 2.25rem;
            border-bottom-right-radius: 2.25rem;
            box-shadow: 0 12px 30px -8px rgba(21, 49, 35, 0.3);
        }

        /* Filter Tabs */
        .bh-filter-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 24px;
            border-radius: 9999px;
            font-size: 0.875rem;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .bh-filter-btn.active {
            background-color: #FFFFFF !important;
            color: #1B3828 !important;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.18);
            font-weight: 700 !important;
        }

        .bh-filter-btn.active i,
        .bh-filter-btn.active span {
            color: #1B3828 !important;
        }

        .bh-filter-btn.inactive {
            background-color: rgba(255, 255, 255, 0.12) !important;
            color: #FFFFFF !important;
            border: 1px solid rgba(255, 255, 255, 0.22);
            backdrop-filter: blur(8px);
            font-weight: 500;
        }

        .bh-filter-btn.inactive:hover {
            background-color: rgba(255, 255, 255, 0.22) !important;
            color: #FFFFFF !important;
        }

        .bh-filter-btn.inactive i,
        .bh-filter-btn.inactive span {
            color: #FFFFFF !important;
        }

        /* Search Bar */
        .bh-search-box {
            width: 100%;
            padding: 13px 52px 13px 24px;
            border: none;
            border-radius: 9999px;
            background-color: #FFFFFF !important;
            color: #1B3828 !important;
            font-size: 0.88rem;
            font-family: 'Poppins', sans-serif;
            outline: none;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.25s ease;
        }

        .bh-search-box:focus {
            box-shadow: 0 8px 30px rgba(16, 185, 129, 0.25), 0 0 0 2px #5B8C51;
        }

        .bh-search-box::placeholder {
            color: #7A8E77 !important;
            font-weight: 400;
        }

        .bh-search-btn {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #1B3828 !important;
            cursor: pointer;
            font-size: 1.05rem;
            padding: 4px;
            transition: color 0.2s ease, transform 0.15s ease;
        }

        .bh-search-btn:hover {
            color: #10B981 !important;
            transform: translateY(-50%) scale(1.1);
        }

        .main-container-detail {
            background: #FFFFFF;
            border-radius: 1.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }

        /* Floating action buttons */
        .bh-floating-chat {
            position: fixed;
            bottom: 5.5rem;
            right: 1.5rem;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #1B3828;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(27, 56, 40, 0.35);
            cursor: pointer;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            z-index: 99;
        }

        .bh-floating-chat:hover {
            transform: scale(1.08);
            box-shadow: 0 12px 28px rgba(27, 56, 40, 0.45);
        }

        .bh-floating-chat .badge {
            position: absolute;
            top: -3px;
            right: -3px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #10B981;
            color: #FFFFFF;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #FFFFFF;
        }

        .bh-floating-star {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background-color: #8A4A28;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(138, 74, 40, 0.35);
            cursor: pointer;
            transition: transform 0.25s ease;
            z-index: 99;
        }

        .bh-floating-star:hover {
            transform: scale(1.08);
        }

        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #F8F6F0; }
        ::-webkit-scrollbar-thumb { background: #1B3828; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #265039; }
    </style>

    <script>
        const BASE_URL = '<?= base_url() ?>';
        const UPLOADS_URL = '<?= base_url('Assets/') ?>';
        const LOGOUT_URL = '<?= base_url('logout') ?>';
        const API_URL_ADD_ATTRACTION = '<?= site_url('home/submitAddPlace') ?>';
        const API_URL_PROFILE_UPDATE = '<?= site_url('home/updateProfile') ?>';
        const API_URL_CHANGE_PASSWORD = '<?= site_url('home/changePassword') ?>';
        const API_URL_DELETE_ACCOUNT = '<?= site_url('home/deleteAccount') ?>';
        const API_URL_VERIFY_REQUEST = '<?= site_url('home/verifyRequest') ?>';
        const API_URL_SUBMIT_REVIEW = '<?= site_url('home/submitReview') ?>';
    </script>
    
    <?php if (isset($js_file)) : ?>
        <script src="<?= base_url('js/' . $js_file) ?>"></script>
    <?php endif; ?>
</head>
<body class="flex min-h-screen bg-[#F8F6F0]">

    <?= $this->renderSection('sidebar') ?>

    <main class="flex-1 ml-20 min-h-screen flex flex-col overflow-y-auto">
        <?php if (isset($show_detail_tempat) && $show_detail_tempat === true) : ?>
            <div class="p-6 md:p-10 w-full">
                <div class="main-container-detail p-6 md:p-8 w-full">
                    <?= $this->renderSection('main_content') ?>
                </div>
            </div>
        <?php else: ?>
            <div class="w-full">
                <?= $this->renderSection('main_content') ?>
            </div>
        <?php endif; ?>
    </main>

    <!-- Floating Actions from Mockup -->
    <div class="bh-floating-chat" title="Chat Komunitas / Bantuan">
        <i class="fa-solid fa-comment-dots text-lg"></i>
        <span class="badge">1</span>
    </div>
    <div class="bh-floating-star" title="Rekomendasi Favorit">
        <i class="fa-solid fa-star text-sm"></i>
    </div>

    <?php include APPPATH . 'Views/partials/chatbot.php'; ?>
</body>
</html>
