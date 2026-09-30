<?= $this->extend('layouts/landing_template'); ?>

<?= $this->section('content'); ?>

<!-- ── Bayan Heritage Design System Stylesheet ── -->
<link href="<?= base_url('css/bayan-heritage.css') ?>" rel="stylesheet">

<!-- Style untuk Tab Navigation -->
<style>
    :root {
        --color-emerald: #047857;
        --color-emerald-light: #10b981;
        --color-inactive-bg: #e5e7eb;
        --color-inactive-text: #6b7280;
        --color-text: #1f2937;
    }

    .bh-tab-section {
        background-color: #f3f4f6;
        padding: 80px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tab-container {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(4, 120, 87, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }

    .tab-buttons {
        display: flex;
        flex-wrap: wrap;
        background-color: #f9fafb;
        border-bottom: 2px solid var(--color-inactive-bg);
    }

    .tab-btn {
        flex: 1;
        background: transparent;
        border: none;
        padding: 18px 24px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 1rem;
        color: var(--color-inactive-text);
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        outline: none;
    }

    .tab-btn:hover {
        color: var(--color-emerald-light);
        background-color: rgba(16, 185, 129, 0.05);
    }

    .tab-btn.active {
        color: #ffffff;
        background-color: var(--color-emerald);
        font-weight: 600;
    }

    .tab-content-wrapper {
        padding: 40px;
    }

    .tab-content {
        display: none;
        animation: fadeIn 0.5s ease;
    }

    .tab-content.active {
        display: block;
    }

    .tab-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.2rem;
        color: var(--color-emerald);
        margin-top: 0;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .tab-text {
        font-size: 1rem;
        line-height: 1.8;
        color: var(--color-text);
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .tab-list {
        margin-top: 16px;
        padding-left: 20px;
        line-height: 1.8;
        font-family: 'Poppins', sans-serif;
    }

    .tab-list li {
        margin-bottom: 12px;
    }

    .tab-list strong {
        color: var(--color-emerald);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        .tab-btn { flex: 1 1 50%; border-bottom: 1px solid var(--color-inactive-bg); }
    }

    @media (max-width: 480px) {
        .tab-btn { flex: 1 1 100%; text-align: left; }
        .tab-btn.active { border-left: 4px solid var(--color-emerald-light); }
        .tab-content-wrapper { padding: 24px; }
        .tab-title { font-size: 1.8rem; }
    }
</style>

<body class="bh-page"
      data-base-url="<?= base_url() ?>"
      data-landing-url="<?= site_url('/') ?>">

    <!-- ═══════════════════════════════════════════
         NAVIGATION — Floating Glassmorphism Nav
    ═══════════════════════════════════════════ -->
    <nav class="bh-nav" id="bh-mainNav" role="navigation" aria-label="Navigasi utama">
        <a href="<?= base_url() ?>" class="bh-nav__brand">
            Bayan <span>Heritage</span>
        </a>
        <ul class="bh-nav__links">
            <li><a href="#sejarah">Sejarah</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="<?= base_url('login') ?>" class="bh-nav__cta">Masuk</a></li>
        </ul>
    </nav>


    <!-- ═══════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════ -->
    <section class="bh-hero" id="hero">
        <!-- Background Image -->
        <div class="bh-hero__bg" style="background-image: url('<?= base_url('Assets/bayan1.jpeg') ?>');"></div>
        
        <!-- Gradient Overlay -->
        <div class="bh-hero__overlay"></div>
        
        <!-- Subtle Pattern -->
        <div class="bh-hero__pattern"></div>

        <!-- Content -->
        <div class="bh-hero__content">
            <div class="bh-hero__ornament">
                Warisan Budaya Lombok
            </div>

            <h1 class="bh-hero__title">
                Masjid Kuno<br><em>Bayan Beleq</em>
            </h1>

            <p class="bh-hero__subtitle">
                Jejak peradaban Islam tertua di Pulau Seribu Masjid. 
                Dibangun pada abad ke-17, menyimpan harmoni antara ajaran Islam 
                dan kearifan budaya Sasak yang abadi.
            </p>

            <a href="#sejarah" class="bh-btn bh-btn--primary" id="hero-cta">
                Jelajahi Sejarahnya
                <span class="bh-btn__arrow">→</span>
            </a>
        </div>

        <!-- Scroll Indicator -->
        <div class="bh-hero__scroll">
            <span>Gulir ke bawah</span>
            <div class="bh-hero__scroll-line"></div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         ARTICLE SECTION — Sejarah & Informasi
    ═══════════════════════════════════════════ -->
    <section class="bh-article" id="sejarah">
        <div class="bh-article__inner">

            <!-- Kolom Kiri — Heading + Pull Quote -->
            <div class="bh-article__heading-group bh-reveal">
                <div class="bh-article__label">
                    Sejarah &amp; Budaya
                </div>

                <h2 class="bh-article__title">
                    Jejak Sejarah yang<br><em>Tak Lekang oleh Waktu</em>
                </h2>

                <div class="bh-article__accent-line"></div>

                <div class="bh-article__pullquote">
                    <p>
                        "Masjid Kuno Bayan Beleq bukan sekadar tempat ibadah — 
                        ia adalah monumen hidup yang menjembatani masa lalu dan masa kini, 
                        menjaga akar spiritual masyarakat Sasak."
                    </p>
                </div>
            </div>

            <!-- Kolom Kanan — Body Text -->
            <div class="bh-article__body">
                <p class="bh-reveal delay-1">
                    Masjid Kuno Bayan Beleq berdiri tegak di jantung Desa Bayan, 
                    Kabupaten Lombok Utara, sebagai saksi bisu perjalanan Islam di 
                    tanah Lombok. Didirikan pada abad ke-17 oleh para penyebar agama 
                    Islam pertama di pulau ini, masjid ini merupakan salah satu 
                    peninggalan sejarah paling signifikan di Nusa Tenggara Barat. 
                    Arsitekturnya yang unik mencerminkan perpaduan harmonis antara 
                    ajaran Islam dengan tradisi budaya Sasak yang sudah mengakar 
                    selama berabad-abad.
                </p>

                <p class="bh-reveal delay-2">
                    Struktur bangunannya menggunakan material alami khas daerah 
                    setempat: dinding dari anyaman bambu, atap dari ijuk (serat enau), 
                    dan fondasi dari susunan batu kali sungai. Lantainya masih berupa 
                    tanah yang dipadatkan, menandakan kesederhanaan dan keikhlasan 
                    para pendiri. Keseluruhan elemen ini memberikan kesan bahwa masjid 
                    menyatu secara organik dengan alam sekitarnya — sebuah filosofi 
                    yang sangat dijunjung oleh masyarakat Wetu Telu, komunitas adat 
                    yang hingga kini menjadi penjaga setia situs sakral ini.
                </p>

                <!-- Info Card -->
                <div class="bh-info-card bh-reveal delay-3">
                    <span class="bh-info-card__icon">📍</span>
                    <div class="bh-info-card__text">
                        <strong>Lokasi:</strong> Desa Bayan, Kecamatan Bayan, 
                        Kabupaten Lombok Utara, Nusa Tenggara Barat — berjarak 
                        sekitar 80 km dari Kota Mataram melalui jalur pesisir utara 
                        dengan pemandangan Gunung Rinjani yang megah.
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         TENTANG SECTION (TAB NAVIGATION)
    ═══════════════════════════════════════════ -->
    <section class="bh-tab-section" id="tentang">
        <div class="tab-container">
            <!-- Tab Navigation Buttons -->
            <div class="tab-buttons">
                <button class="tab-btn active" data-target="arsitektur">Arsitektur</button>
                <button class="tab-btn" data-target="pakaian-adat">Pakaian Adat</button>
                <button class="tab-btn" data-target="maulid-adat">Maulid Adat</button>
                <button class="tab-btn" data-target="larangan">Larangan</button>
            </div>

            <!-- Tab Contents -->
            <div class="tab-content-wrapper">
                <!-- Tab 1: Arsitektur -->
                <div class="tab-content active" id="arsitektur">
                    <h2 class="tab-title">Filosofi Arsitektur Wetu Telu</h2>
                    <p class="tab-text">
                        Arsitektur tradisional di Bayan memiliki makna filosofis yang mendalam, mencerminkan konsep <strong>Wetu Telu</strong> dan harmoni alam. Setiap elemen bangunan tidak hanya berfungsi secara fisik, tetapi juga spiritual:
                    </p>
                    <ul class="tab-list">
                        <li><strong>Pondasi Batu Kali:</strong> Melambangkan keteguhan dan pijakan yang kuat pada bumi, serta pengingat akan pentingnya menjaga keseimbangan dengan alam bawah.</li>
                        <li><strong>Dinding Bambu:</strong> Menyimbolkan fleksibilitas, kesederhanaan, dan keterbukaan masyarakat adat dalam menerima perubahan tanpa kehilangan jati diri.</li>
                        <li><strong>Tiang Kayu:</strong> Sebagai simbol manusia yang berdiri tegak menghubungkan bumi dan langit (Sang Pencipta), serta lambang kepemimpinan dan kekokohan adat.</li>
                    </ul>
                </div>

                <!-- Tab 2: Pakaian Adat -->
                <div class="tab-content" id="pakaian-adat">
                    <h2 class="tab-title">Tata Tertib Pakaian Adat Sasak</h2>
                    <p class="tab-text">
                        Memasuki area suci atau mengikuti prosesi adat di Bayan mewajibkan penggunaan pakaian adat Sasak yang memiliki makna kesopanan dan penghormatan yang tinggi.
                    </p>
                    <ul class="tab-list">
                        <li><strong>Dodot:</strong> Kain kemben atau sabuk kain yang diikatkan di pinggang. Penggunaan dodot melambangkan pengendalian diri dan pengikat hawa nafsu duniawi.</li>
                        <li><strong>Jong:</strong> Ikat kepala khas yang wajib dikenakan. Jong melambangkan kehormatan, pikiran yang bersih, dan ketaatan kepada Sang Pencipta serta leluhur.</li>
                    </ul>
                </div>

                <!-- Tab 3: Maulid Adat -->
                <div class="tab-content" id="maulid-adat">
                    <h2 class="tab-title">Keunikan Maulid Adat Bayan</h2>
                    <p class="tab-text">
                        Perayaan Maulid di Bayan memiliki keunikan tersendiri, terutama dalam penentuan jadwal dan tata cara pelaksanaannya yang sangat sakral.
                    </p>
                    <p class="tab-text" style="margin-top: 12px;">
                        Jadwal perayaan tidak semata-mata merujuk pada kalender Hijriah secara umum, melainkan menggunakan <strong>sistem penanggalan adat Bayan</strong> yang dipadukan dengan tanda-tanda alam. Hal ini membuat waktu pelaksanaan Maulid Adat biasanya berselisih dengan kalender nasional. Perayaan ini dipusatkan di Masjid Kuno Bayan Beleq dan diisi dengan ritual mencuci benda pusaka, menumbuk padi, serta doa bersama.
                    </p>
                </div>

                <!-- Tab 4: Larangan -->
                <div class="tab-content" id="larangan">
                    <h2 class="tab-title">Larangan bagi Wisatawan</h2>
                    <p class="tab-text">
                        Untuk menjaga kelestarian dan kesucian nilai adat Bayan, terdapat beberapa pantangan ketat yang wajib dipatuhi oleh setiap pengunjung:
                    </p>
                    <ul class="tab-list">
                        <li><strong>Larangan Masuk bagi Wanita Haid:</strong> Wanita yang sedang dalam masa menstruasi dilarang keras memasuki area suci seperti Masjid Kuno Bayan untuk menjaga kebersihannya.</li>
                        <li><strong>Kewajiban Menjaga Tata Krama:</strong> Pengunjung wajib berbicara dengan sopan, dilarang mengucapkan kata-kata kasar, serta harus menunjukkan rasa hormat kepada adat setempat.</li>
                        <li><strong>Larangan Merusak Area Suci:</strong> Dilarang keras mengambil, memindahkan, atau merusak benda apapun di kawasan situs adat dan hutan adat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- ═══════════════════════════════════════════
         FOOTER
    ═══════════════════════════════════════════ -->
    <footer class="bh-footer">
        <p>
            &copy; 2026 <strong>Bayan Heritage</strong> — Wisata Budaya Masjid Kuno Bayan Beleq.
            Dibuat dengan ❤ untuk pelestarian warisan budaya Lombok.
        </p>
    </footer>


    <!-- ═══════════════════════════════════════════
         SCRIPT — Scroll Effects (Vanilla JS)
    ═══════════════════════════════════════════ -->
    <script>
    (function() {
        'use strict';

        // ── Scroll-triggered reveal animation ──
        const revealElements = document.querySelectorAll('.bh-reveal');
        
        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });

        // ── Navbar scroll effect ──
        var nav = document.getElementById('bh-mainNav');
        if (nav) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 80) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }
            });
        }

        // ── Smooth scroll for anchor links ──
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                var target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // ── Tab Navigation Logic ──
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        if (tabButtons.length > 0) {
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    button.classList.add('active');
                    const targetId = button.getAttribute('data-target');
                    const targetContent = document.getElementById(targetId);
                    if (targetContent) {
                        targetContent.classList.add('active');
                    }
                });
            });
        }
    })();
    </script>

</body>
<?= $this->endSection(); ?>
