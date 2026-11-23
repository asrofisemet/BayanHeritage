<?= $this->extend('layouts/landing_template'); ?>

<?= $this->section('content'); ?>

<!-- ── Bayan Heritage Design System Stylesheet ── -->
<link href="<?= base_url('css/bayan-heritage.css') ?>" rel="stylesheet">

<!-- ═══════════════════════════════════════════════════════════
     Premium Tab Navigation — Bayan Heritage
     Sage/Olive green palette · Playfair Display + Poppins
═══════════════════════════════════════════════════════════ -->

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
        <button class="bh-nav__toggle" id="bh-navToggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
        <ul class="bh-nav__links" id="bh-navLinks">
            <li><a href="#sejarah">Sejarah</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="<?= base_url('login') ?>" class="bh-nav__cta">Masuk</a></li>
        </ul>
    </nav>


    <!-- ═══════════════════════════════════════════
         HERO SECTION
    ═══════════════════════════════════════════ -->
    <section class="bh-hero" id="hero">
        <div class="bh-hero__bg" style="background-image: url('<?= base_url('Assets/bayan1.jpeg') ?>');"></div>
        <div class="bh-hero__overlay"></div>
        <div class="bh-hero__pattern"></div>

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


    <!-- ═══════════════════════════════════════════════════════
         TENTANG SECTION — Premium Tab Navigation
    ═══════════════════════════════════════════════════════ -->
    <section class="bh-tabs" id="tentang">
        <div class="bh-tabs__inner">

            <!-- Section Header -->
            <div class="bh-tabs__header bh-reveal">
                <div class="bh-tabs__label">Panduan Wisata Budaya</div>
                <h2 class="bh-tabs__heading">
                    Mengenal Tradisi<br><em>Desa Adat Bayan</em>
                </h2> 
                <p class="bh-tabs__subheading">
                    Empat hal penting yang wajib dipahami setiap wisatawan sebelum 
                    mengunjungi kawasan sakral Masjid Kuno Bayan Beleq.
                </p>
                <!-- Decorative Ornament -->
                <svg class="bh-tabs__ornament" width="120" height="16" viewBox="0 0 120 16" fill="none" aria-hidden="true">
                    <path d="M0 8 H45 M75 8 H120" stroke="#7BA373" stroke-width="1.5"/>
                    <path d="M52 0 L60 8 L68 0" stroke="#5B8C51" stroke-width="1.5" fill="none"/>
                    <path d="M52 16 L60 8 L68 16" stroke="#5B8C51" stroke-width="1.5" fill="none"/>
                </svg>
            </div>

            <!-- Tab Container -->
            <div class="bh-tabs__container bh-reveal delay-1">

                <!-- Tab Navigation Buttons -->
                <div class="bh-tabs__nav" role="tablist" aria-label="Panduan Wisata Budaya">
                    <button class="bh-tabs__btn active" role="tab" 
                            id="tab-arsitektur" aria-selected="true" 
                            aria-controls="panel-arsitektur" data-target="panel-arsitektur">
                        <span class="bh-tabs__btn-icon">🏛️</span>
                        <span class="bh-tabs__btn-label">Arsitektur Wetu Telu</span>
                        <span class="bh-tabs__btn-bar"></span>
                    </button>
                    <button class="bh-tabs__btn" role="tab" 
                            id="tab-pakaian" aria-selected="false" 
                            aria-controls="panel-pakaian" data-target="panel-pakaian">
                        <span class="bh-tabs__btn-icon">👘</span>
                        <span class="bh-tabs__btn-label">Tata Tertib Pakaian</span>
                        <span class="bh-tabs__btn-bar"></span>
                    </button>
                    <button class="bh-tabs__btn" role="tab" 
                            id="tab-maulid" aria-selected="false" 
                            aria-controls="panel-maulid" data-target="panel-maulid">
                        <span class="bh-tabs__btn-icon">🌙</span>
                        <span class="bh-tabs__btn-label">Acara Maulid Adat</span>
                        <span class="bh-tabs__btn-bar"></span>
                    </button>
                    <button class="bh-tabs__btn" role="tab" 
                            id="tab-pantangan" aria-selected="false" 
                            aria-controls="panel-pantangan" data-target="panel-pantangan">
                        <span class="bh-tabs__btn-icon">⚠️</span>
                        <span class="bh-tabs__btn-label">Pantangan &amp; Sanksi</span>
                        <span class="bh-tabs__btn-bar"></span>
                    </button>
                </div>

                <!-- Tab Panels -->
                <div class="bh-tabs__panels">

                    <!-- ─── Panel 1: Arsitektur Wetu Telu ─── -->
                    <div class="bh-tabs__panel active" role="tabpanel" 
                         id="panel-arsitektur" aria-labelledby="tab-arsitektur">
                        <div class="bh-tabs__panel-inner">
                            <h3 class="bh-tabs__title">Arsitektur Wetu Telu</h3>
                            <p class="bh-tabs__text">
                                Bangunan <strong>Masjid Kuno Bayan Beleq</strong> memiliki tiga unsur 
                                arsitektur utama yang sarat akan makna spiritual mendalam. Setiap 
                                bagian bangunan melambangkan tahapan perjalanan rohani manusia menuju 
                                Sang Pencipta:
                            </p>

                            <div class="bh-tabs__card-group">
                                <div class="bh-tabs__card">
                                    <div class="bh-tabs__card-accent"></div>
                                    <div class="bh-tabs__card-body">
                                        <h4 class="bh-tabs__card-title">
                                            <span class="bh-tabs__card-num">01</span>
                                            Kaki — Pondasi Batu Kali
                                        </h4>
                                        <p class="bh-tabs__card-text">
                                            Melambangkan <strong>Syariat</strong> dan tempat manusia berpijak 
                                            di bumi. Pondasi batu kali sungai yang kokoh menjadi simbol 
                                            keteguhan iman serta fondasi kehidupan beragama yang kuat.
                                        </p>
                                    </div>
                                </div>

                                <div class="bh-tabs__card">
                                    <div class="bh-tabs__card-accent"></div>
                                    <div class="bh-tabs__card-body">
                                        <h4 class="bh-tabs__card-title">
                                            <span class="bh-tabs__card-num">02</span>
                                            Badan — Dinding Bambu
                                        </h4>
                                        <p class="bh-tabs__card-text">
                                            Merupakan ruang transisi (<strong>Tariqat</strong> dan 
                                            <strong>Hakikat</strong>) untuk membersihkan diri dari segala 
                                            urusan duniawi. Dinding bambu yang sederhana melambangkan 
                                            kerendahan hati dan kesucian niat.
                                        </p>
                                    </div>
                                </div>

                                <div class="bh-tabs__card">
                                    <div class="bh-tabs__card-accent"></div>
                                    <div class="bh-tabs__card-body">
                                        <h4 class="bh-tabs__card-title">
                                            <span class="bh-tabs__card-num">03</span>
                                            Atap — Molo-molo
                                        </h4>
                                        <p class="bh-tabs__card-text">
                                            Meruncing ke atas melambangkan <strong>Makrifat</strong>, 
                                            <strong>Tauhid</strong>, dan hubungan langsung dengan 
                                            <strong>Allah SWT</strong>. Puncak atap yang mengerucut 
                                            menggambarkan fokus total manusia kepada keesaan Tuhan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ─── Panel 2: Tata Tertib Pakaian ─── -->
                    <div class="bh-tabs__panel" role="tabpanel" 
                         id="panel-pakaian" aria-labelledby="tab-pakaian">
                        <div class="bh-tabs__panel-inner">
                            <h3 class="bh-tabs__title">Tata Tertib Pakaian</h3>
                            <p class="bh-tabs__text">
                                Aturan berpakaian dalam tradisi adat Sasak di kawasan Bayan bukan 
                                sekadar formalitas, melainkan wujud penghormatan spiritual yang 
                                mendalam. Setiap helai kain mengandung makna filosofis tersendiri.
                            </p>

                            <!-- Laki-Laki -->
                            <div class="bh-tabs__split-card">
                                <div class="bh-tabs__split-header">
                                    <span class="bh-tabs__split-icon">♂</span>
                                    <h4>Aturan Pakaian Laki-laki</h4>
                                </div>
                                <ul class="bh-tabs__list">
                                    <li>
                                        <strong>Dodot</strong> (kain tenun pinggang) — Wajib dikenakan 
                                        sebagai pengikat di area pinggang. Dodot melambangkan kemampuan 
                                        laki-laki untuk <em>menahan hawa nafsu</em> dan menjaga 
                                        kesucian diri selama berada di kawasan sakral.
                                    </li>
                                    <li>
                                        <strong>Sapuk</strong> (ikat kepala) — Wajib dikenakan agar 
                                        pikiran tetap <em>fokus kepada Sang Pencipta</em>. Sapuk 
                                        menjadi simbol konsentrasi spiritual dan ketundukan kepada 
                                        Tuhan Yang Maha Esa.
                                    </li>
                                </ul>
                            </div>

                            <!-- Perempuan -->
                            <div class="bh-tabs__split-card">
                                <div class="bh-tabs__split-header">
                                    <span class="bh-tabs__split-icon">♀</span>
                                    <h4>Aturan Pakaian Perempuan</h4>
                                </div>
                                <ul class="bh-tabs__list">
                                    <li>
                                        <strong>Kemben / Selendang</strong> — Wajib dikenakan untuk 
                                        <em>melindungi kesucian hati</em>. Kemben menutup dada dan 
                                        bahu sebagai bentuk kesopanan tertinggi di hadapan Yang Maha Kuasa.
                                    </li>
                                    <li>
                                        <strong>Kain Tenun Panjang</strong> — Dikenakan sebagai bawahan, 
                                        melambangkan <em>kerendahan hati</em> dan penghormatan terhadap 
                                        bumi serta para leluhur.
                                    </li>
                                </ul>
                                <div class="bh-tabs__warning-inline">
                                    <span>⛔</span>
                                    <p>
                                        <strong>Dilarang keras</strong> menggunakan perhiasan emas atau 
                                        perak yang mencolok di kawasan sakral. Hal ini dianggap 
                                        bertentangan dengan nilai kesederhanaan adat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ─── Panel 3: Acara Maulid Adat ─── -->
                    <div class="bh-tabs__panel" role="tabpanel" 
                         id="panel-maulid" aria-labelledby="tab-maulid">
                        <div class="bh-tabs__panel-inner">
                            <h3 class="bh-tabs__title">Acara Maulid Adat</h3>
                            <p class="bh-tabs__text">
                                Jadwal pelaksanaan Maulid Adat di Desa Bayan ditentukan oleh 
                                <strong>kalender Wariga Sereat (Rowot)</strong>, sebuah sistem 
                                penanggalan tradisional yang berbeda dengan kalender Hijriah pada 
                                umumnya. Waktu pelaksanaan bergantung pada perhitungan adat yang 
                                dipadukan dengan tanda-tanda alam.
                            </p>

                            <!-- Prosesi Terbuka -->
                            <div class="bh-tabs__prosesi-card bh-tabs__prosesi--open">
                                <div class="bh-tabs__prosesi-badge">✅ Terbuka untuk Wisatawan</div>
                                <h4>Prosesi yang Dapat Disaksikan</h4>
                                <ul class="bh-tabs__list">
                                    <li>
                                        <strong>Menutu</strong> — Prosesi menumbuk padi secara 
                                        tradisional yang dilakukan bersama-sama oleh warga desa 
                                        sebagai simbol gotong royong dan keberkahan.
                                    </li>
                                    <li>
                                        <strong>Peresean</strong> — Pertarungan tradisional 
                                        menggunakan tongkat rotan dan perisai kulit kerbau, 
                                        menunjukkan keberanian dan ketangguhan pria Sasak.
                                    </li>
                                    <li>
                                        <strong>Arak-arakan Praja Mulud</strong> — Prosesi membawa 
                                        <em>Ancak</em> (wadah sesaji dari bambu) yang dihias 
                                        dan diarak keliling desa dengan iringan gamelan.
                                    </li>
                                </ul>
                            </div>

                            <!-- Prosesi Tertutup -->
                            <div class="bh-tabs__prosesi-card bh-tabs__prosesi--closed">
                                <div class="bh-tabs__prosesi-badge bh-tabs__prosesi-badge--closed">🚫 Tertutup untuk Wisatawan</div>
                                <h4>Prosesi Sakral — Area Terbatas</h4>
                                <ul class="bh-tabs__list bh-tabs__list--warning">
                                    <li>
                                        Wisatawan <strong>dilarang memasuki area Kampu</strong> 
                                        (kawasan inti tempat upacara tertinggi berlangsung).
                                    </li>
                                    <li>
                                        Wisatawan <strong>dilarang mendekati mata air suci</strong> 
                                        yang digunakan untuk ritual pemurnian.
                                    </li>
                                    <li>
                                        Wisatawan <strong>dilarang mengikuti Doa Puncak</strong> 
                                        yang diselenggarakan di dalam masjid oleh para pemangku adat.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ─── Panel 4: Pantangan & Sanksi ─── -->
                    <div class="bh-tabs__panel" role="tabpanel" 
                         id="panel-pantangan" aria-labelledby="tab-pantangan">
                        <div class="bh-tabs__panel-inner">
                            <h3 class="bh-tabs__title">Pantangan &amp; Sanksi</h3>
                            <p class="bh-tabs__text">
                                Kawasan Masjid Kuno Bayan Beleq dijaga oleh hukum adat yang ketat. 
                                Setiap pelanggaran dipercaya membawa konsekuensi spiritual serius. 
                                Berikut daftar pantangan yang <strong>wajib dipatuhi</strong> tanpa 
                                pengecualian:
                            </p>

                            <div class="bh-tabs__pantangan-list">
                                <div class="bh-tabs__pantangan-item bh-tabs__pantangan--critical">
                                    <div class="bh-tabs__pantangan-marker">
                                        <span>1</span>
                                    </div>
                                    <div class="bh-tabs__pantangan-body">
                                        <h4>Larangan bagi Perempuan Haid / Nifas</h4>
                                        <p>
                                            Perempuan yang sedang dalam masa haid atau nifas 
                                            <strong>dilarang keras</strong> memasuki pelataran masjid, 
                                            area pemakaman leluhur, maupun mata air suci. Ini merupakan 
                                            pantangan tertinggi dalam adat Bayan.
                                        </p>
                                    </div>
                                </div>

                                <div class="bh-tabs__pantangan-item bh-tabs__pantangan--critical">
                                    <div class="bh-tabs__pantangan-marker">
                                        <span>2</span>
                                    </div>
                                    <div class="bh-tabs__pantangan-body">
                                        <h4>Larangan Memasuki Bangunan Utama</h4>
                                        <p>
                                            Wisatawan <strong>dilarang masuk</strong> ke bangunan utama 
                                            masjid atau melangkahi area makam tanpa izin resmi dari 
                                            pemangku adat. Setiap kunjungan ke area inti harus 
                                            didampingi oleh juru kunci.
                                        </p>
                                    </div>
                                </div>

                                <div class="bh-tabs__pantangan-item">
                                    <div class="bh-tabs__pantangan-marker">
                                        <span>3</span>
                                    </div>
                                    <div class="bh-tabs__pantangan-body">
                                        <h4>Larangan Perilaku Tidak Pantas</h4>
                                        <p>
                                            <strong>Dilarang</strong> mengucapkan kata-kata kotor, 
                                            merusak lingkungan sekitar situs, atau bermesraan di 
                                            dalam kawasan adat. Perilaku ini dianggap mencemarkan 
                                            kesucian tempat.
                                        </p>
                                    </div>
                                </div>

                                <div class="bh-tabs__pantangan-item bh-tabs__pantangan--sanksi">
                                    <div class="bh-tabs__pantangan-marker bh-tabs__pantangan-marker--sanksi">
                                        <span>⚡</span>
                                    </div>
                                    <div class="bh-tabs__pantangan-body">
                                        <h4>Sanksi: Kepemaliq</h4>
                                        <p>
                                            Pelanggar pantangan dipercaya dapat terkena 
                                            <strong><em>kepemaliq</em></strong> — sanksi gaib berupa 
                                            malapetaka, sakit yang tidak dapat dijelaskan secara medis, 
                                            atau nasib buruk yang terus-menerus. Untuk memulihkan diri, 
                                            pelanggar <strong>wajib meminta maaf secara adat</strong> 
                                            melalui upacara khusus yang dipimpin oleh tetua adat 
                                            dengan menyertakan sesaji tertentu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.bh-tabs__panels -->

            </div><!-- /.bh-tabs__container -->

        </div><!-- /.bh-tabs__inner -->
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
         SCRIPT — Scroll + Tab Logic (Vanilla JS)
    ═══════════════════════════════════════════ -->
    <script>
    (function() {
        'use strict';

        /* ── Scroll-triggered reveal animation ── */
        var revealElements = document.querySelectorAll('.bh-reveal');
        var revealObserver = new IntersectionObserver(function(entries) {
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

        /* ── Navbar scroll effect ── */
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

        /* ── Mobile hamburger toggle ── */
        var navToggle = document.getElementById('bh-navToggle');
        var navLinks = document.getElementById('bh-navLinks');
        if (navToggle && navLinks) {
            navToggle.addEventListener('click', function() {
                navLinks.classList.toggle('open');
            });
            // Close menu when a link is clicked
            navLinks.querySelectorAll('a').forEach(function(link) {
                link.addEventListener('click', function() {
                    navLinks.classList.remove('open');
                });
            });
        }

        /* ── Smooth scroll for anchor links ── */
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                var target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        /* ── Premium Tab Navigation Logic ── */
        var tabButtons = document.querySelectorAll('.bh-tabs__btn');
        var tabPanels  = document.querySelectorAll('.bh-tabs__panel');

        if (tabButtons.length > 0) {
            tabButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var targetId = this.getAttribute('data-target');

                    // Deactivate all
                    tabButtons.forEach(function(btn) {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-selected', 'false');
                    });
                    tabPanels.forEach(function(panel) {
                        panel.classList.remove('active');
                        panel.classList.remove('bh-tabs__panel--animating');
                    });

                    // Activate clicked
                    this.classList.add('active');
                    this.setAttribute('aria-selected', 'true');
                    var targetPanel = document.getElementById(targetId);
                    if (targetPanel) {
                        targetPanel.classList.add('active');
                        // Re-trigger animation
                        void targetPanel.offsetWidth;
                        targetPanel.classList.add('bh-tabs__panel--animating');
                    }
                });

                // Keyboard navigation (arrow keys)
                button.addEventListener('keydown', function(e) {
                    var index = Array.from(tabButtons).indexOf(this);
                    var newIndex = index;
                    if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                        newIndex = (index + 1) % tabButtons.length;
                        e.preventDefault();
                    } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                        newIndex = (index - 1 + tabButtons.length) % tabButtons.length;
                        e.preventDefault();
                    }
                    if (newIndex !== index) {
                        tabButtons[newIndex].focus();
                        tabButtons[newIndex].click();
                    }
                });
            });
        }

    })();
    </script>

</body>
<?= $this->endSection(); ?>
