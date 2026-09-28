<?= $this->extend('layouts/landing_template'); ?>

<?= $this->section('content'); ?>

<!-- ── Bayan Heritage Design System Stylesheet ── -->
<link href="<?= base_url('css/bayan-heritage.css') ?>" rel="stylesheet">

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
    })();
    </script>

</body>
<?= $this->endSection(); ?>
