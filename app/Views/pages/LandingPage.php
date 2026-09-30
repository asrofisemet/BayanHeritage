<?= $this->extend('layouts/landing_template') ; ?>

<?= $this->section('content') ; ?>
<body class="text-bh-text font-jaldi bg-bh-bg">
    <div class="header w-full relative text-white flex flex-col justify-between p-4 md:p-6 bg-center bg-cover bg-no-repeat transition-all duration-1000 ease-in-out shadow-2xl overflow-hidden" style="height: 95vh; border-bottom: 4px solid #4A6741;">
        <!-- Dark overlay to ensure text is always readable over changing images -->
        <div class="absolute inset-0 bg-black/30 pointer-events-none"></div>

        <!-- Green Glassmorphism Navigation -->
        <nav class="top-nav flex justify-between items-center px-8 py-3 bg-bh-primary\/90 backdrop-blur-md rounded-full shadow-lg border border-white/30 relative z-10 mt-2 mx-2 md:mx-10">
            <div class="text-2xl font-bold font-josefin tracking-wider">
                Bayan Heritage
            </div>
            <div class="space-x-4 md:space-x-6 flex items-center">
                <a href="<?= base_url('login') ?>" class="text-white no-underline text-xl font-bold hover:text-bh-accent transition-colors drop-shadow-md">Login</a>
                <span class="text-white/60 text-xl font-bold">|</span>
                <a href="<?= base_url('signup') ?>" class="text-white no-underline text-xl font-bold hover:text-bh-accent transition-colors drop-shadow-md">Sign Up</a>
            </div>
        </nav>

        <div class="hero flex-1 flex relative z-10 transition-all duration-1000 ease-in-out p-4 md:p-10 mx-2 md:mx-10">
            <h1
                id="hero-text"
                class="text-4xl md:text-6xl font-semibold leading-relaxed inline-block text-white transition-opacity duration-500 ease-in-out font-josefin drop-shadow-2xl"> </h1>
        </div>
    </div>

    <div class="about py-10 text-bh-text text-center max-w-6xl mx-auto px-4 font-josefin">  <h2 class="text-5xl font-bold mb-2">About Masjid Kuno Bayan</h2>
        <p class="mb-5 text-lg leading-normal">Masjid Kuno Bayan (Bayan Ancient Mosque) is a historical landmark and the oldest mosque on the island of Lombok, Indonesia. Built in the 17th century, it stands as a symbol of the harmonious blend between early Islamic teachings and the indigenous Sasak culture. The mosque is characterized by its traditional architecture, featuring a bamboo structure, a thatched roof, and a foundation made of river stones. To this day, it remains a sacred site where unique religious and cultural ceremonies, such as the Maulid Adat, are beautifully preserved.</p>
        <div class="video-container mt-5 flex justify-center">
            <video controls autoplay muted loop class="w-11/12 max-w-[1000px] rounded-lg">
                <source src="<?= base_url('Assets/videoLombok.mp4') ?>" type="video/mp4"> Your browser does not support the video.
            </video>
        </div>
    </div>

    <!-- Google Fonts untuk Tab (jika belum ada) -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
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
            <div class="tab-content-wrapper text-left">
                <!-- Tab 1: Arsitektur -->
                <div class="tab-content active" id="arsitektur">
                    <h2 class="tab-title">Filosofi Arsitektur Wetu Telu</h2>
                    <div class="mb-6 overflow-hidden rounded-xl shadow-md h-64 md:h-80 w-full transition duration-300 hover:shadow-lg">
                        <img src="<?= base_url('Assets/arsitektur.jpg') ?>" alt="Arsitektur Wetu Telu" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
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
                    <div class="flex flex-col sm:flex-row gap-4 mb-6">
                        <div class="overflow-hidden rounded-xl shadow-md h-64 md:h-80 flex-1 transition duration-300 hover:shadow-lg">
                            <img src="<?= base_url('Assets/pakaian adat cowok.jpg') ?>" alt="Pakaian Adat Pria" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" style="object-position: top;">
                        </div>
                        <div class="overflow-hidden rounded-xl shadow-md h-64 md:h-80 flex-1 transition duration-300 hover:shadow-lg">
                            <img src="<?= base_url('Assets/pakaian adat cewek.JPG') ?>" alt="Pakaian Adat Wanita" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" style="object-position: top;">
                        </div>
                    </div>
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
                    <h2 class="tab-title">Sistem Penanggalan Maulid Adat</h2>
                    <div class="mb-6 overflow-hidden rounded-xl shadow-md h-64 md:h-80 w-full transition duration-300 hover:shadow-lg">
                        <img src="<?= base_url('Assets/mulud bayan.jpeg') ?>" alt="Maulid Adat Bayan" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <p class="tab-text">
                        Perayaan Maulid di Bayan memiliki keunikan tersendiri karena tidak merujuk langsung pada kalender Hijriah umum, melainkan memiliki <strong>sistem penanggalan adat (Kalender Sasak/Rowot)</strong> yang sangat spesifik.
                    </p>
                    <ul class="tab-list mt-3">
                        <li><strong>Penentuan Jadwal Pasti:</strong> Jatuhnya perayaan Maulid Adat Bayan ditentukan oleh para tokoh adat (Kyai Adat) melalui kombinasi pengamatan munculnya bintang Pari (Bintang Rowot), perhitungan bulan (purnama/tilem), dan hitungan matematis <em>Tri Wara</em> serta <em>Panca Wara</em>.</li>
                        <li><strong>Waktu Pelaksanaan:</strong> Puncak peringatannya biasanya dirayakan dua hari setelah Maulid secara kalender nasional, sehingga kerap berselisih hari dengan kalender umum.</li>
                        <li><strong>Prosesi Utama:</strong> Acara dipusatkan di Masjid Kuno Bayan Beleq, meliputi ritual mencuci pusaka, <em>Menumbuk Padi (Ngahaq)</em>, dan doa bersama.</li>
                    </ul>
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
         LOKASI & AKSES SECTION
    ═══════════════════════════════════════════ -->
    <section class="bh-lokasi-akses-section py-20" style="background-color: #f0fdf4;" id="lokasi">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-12" style="font-family: 'Playfair Display', serif; color: #064e3b;">
                Lokasi & Akses
            </h2>

            <!-- 2-Column Grid (Responsive) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Kolom Kiri: Maps (Iframe) -->
                <div class="flex flex-col gap-6">
                    <!-- Peta 2D -->
                    <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-white" style="height: 300px; width: 100%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15793.475535551397!2d116.42160673094733!3d-8.266032086592425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc2b123332ef8f%3A0x242a3ce9224598e4!2sMasjid%20Kuno%20Bayan%20Beleq!5e0!3m2!1sen!2sid!4v1790800540554!5m2!1sen!2sid" 
                            width="100%" height="100%" style="border:0;" 
                            allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                    <!-- Peta 360 / Street View -->
                    <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-white" style="height: 300px; width: 100%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1790800672122!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJRG44Y2ZQNGdF!2m2!1d-8.266685679383496!2d116.4271547363054!3f317.9912!4f0!5f0.7820865974627469" 
                            width="100%" height="100%" style="border:0;" 
                            allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>

                <!-- Kolom Kanan: Teks Informasi Lokasi -->
                <div class="flex flex-col justify-center bg-white p-8 md:p-10 rounded-3xl shadow-xl" style="font-family: 'Poppins', sans-serif; color: #1f2937; border-top: 5px solid #047857;">
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-3 flex items-center gap-3" style="color: #064e3b; font-family: 'Playfair Display', serif;">
                            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-green-100 text-green-700">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            Alamat Lengkap
                        </h3>
                        <p class="text-lg leading-relaxed text-gray-700" style="margin-left: 3.25rem;">
                            Desa Bayan, Kecamatan Bayan, Kabupaten Lombok Utara, Nusa Tenggara Barat.
                        </p>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-3 flex items-center gap-3" style="color: #064e3b; font-family: 'Playfair Display', serif;">
                            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-green-100 text-green-700">
                                <i class="fa-solid fa-car-side"></i>
                            </span>
                            Jarak Tempuh
                        </h3>
                        <p class="text-lg leading-relaxed text-gray-700" style="margin-left: 3.25rem;">
                            Berjarak sekitar <strong>80 kilometer</strong> dari pusat Kota Mataram. Perjalanan darat menggunakan mobil atau motor biasanya memakan waktu sekitar <strong>2 hingga 2,5 jam</strong>.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold mb-3 flex items-center gap-3" style="color: #064e3b; font-family: 'Playfair Display', serif;">
                            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-green-100 text-green-700">
                                <i class="fa-solid fa-route"></i>
                            </span>
                            Informasi Akses Jalan
                        </h3>
                        <p class="text-lg leading-relaxed text-gray-700" style="margin-left: 3.25rem;">
                            Akses jalan menuju lokasi sangat baik dan sudah diaspal mulus. Dapat dilalui oleh kendaraan pribadi maupun bus pariwisata. Selama perjalanan, Anda bisa memilih rute pesisir Pantai Senggigi yang indah, atau rute pegunungan Hutan Pusuk yang sejuk.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <main class="main-container flex-1 overflow-y-auto bg-white py-16">
        <?php if (isset($show_detail_tempat) && $show_detail_tempat === true) : ?>
            <div class="min-h-screen p-6 md:p-8 w-full max-w-7xl mx-auto">
                <div id="header" class="header mb-5 ">
                    <?php include APPPATH . 'Views/partials/main_content_user.php'; ?>
                </div>
            </div>
        <?php else : ?>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 font-josefin">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-bh-primary mb-6">Sacred Tombs of Bayan</h2>
                <p class="text-lg md:text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                    Surrounding the Bayan Ancient Mosque are the sacred resting places of prominent religious figures who first spread Islam in Lombok. These ancient tombs, marked by river stones and protected by traditional bamboo structures, remain significant spiritual sites for the local community and serve as a testament to the region's rich heritage.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Makam Card 1 (ID: 27) -->
                <div class="bg-bh-surface rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-bh-border" onclick="window.location.href='<?= site_url('/?show=detail&id=27') ?>'">
                    <img src="<?= base_url('Assets/makam1.jpeg') ?>" alt="Makam 1" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-bh-brown mb-2 text-left font-josefin">Historical Heritage</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">The sacred tombs are carefully preserved by the local community, maintaining their original form with river stone foundations and traditional bamboo fencing.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-sm rating" style="color: #F59E0B;" data-rating="4.8"></div> 
                                <span class="text-xs text-gray-500 font-medium">(24 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=27') ?>" class="text-bh-accent-text text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=27') ?>" class="text-bh-text text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 2 (ID: 28) -->
                <div class="bg-bh-surface rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-bh-border" onclick="window.location.href='<?= site_url('/?show=detail&id=28') ?>'">
                    <img src="<?= base_url('Assets/makam2.jpeg') ?>" alt="Makam 2" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-bh-brown mb-2 text-left font-josefin">Spiritual Significance</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">These resting places belong to the early Islamic scholars of Lombok, making the area a focal point for spiritual reflection and traditional ceremonies.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-sm rating" style="color: #F59E0B;" data-rating="5.0"></div> 
                                <span class="text-xs text-gray-500 font-medium">(42 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=28') ?>" class="text-bh-accent-text text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=28') ?>" class="text-bh-text text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 3 (ID: 29) -->
                <div class="bg-bh-surface rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-bh-border" onclick="window.location.href='<?= site_url('/?show=detail&id=29') ?>'">
                    <img src="<?= base_url('Assets/makam5.jpeg') ?>" alt="Makam 3" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-bh-brown mb-2 text-left font-josefin">Architectural Harmony</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">The tomb structures showcase the beautiful syncretism of early Islamic teachings and indigenous Sasak cultural aesthetics, blending seamlessly with nature.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-sm rating" style="color: #F59E0B;" data-rating="4.7"></div> 
                                <span class="text-xs text-gray-500 font-medium">(18 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=29') ?>" class="text-bh-accent-text text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=29') ?>" class="text-bh-text text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 4 (ID: 30) -->
                <div class="bg-bh-surface rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-bh-border" onclick="window.location.href='<?= site_url('/?show=detail&id=30') ?>'">
                    <img src="<?= base_url('Assets/makam6.jpeg') ?>" alt="Makam 4" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-bh-brown mb-2 text-left font-josefin">Timeless Tradition</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">Covered with traditional thatched roofs (ijuk) and surrounded by ancient trees, the tombs evoke a sense of deep tranquility and historical reverence.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-sm rating" style="color: #F59E0B;" data-rating="4.9"></div> 
                                <span class="text-xs text-gray-500 font-medium">(36 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=30') ?>" class="text-bh-accent-text text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=30') ?>" class="text-bh-text text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 5 (ID: 31) -->
                <div class="bg-bh-surface rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-bh-border" onclick="window.location.href='<?= site_url('/?show=detail&id=31') ?>'">
                    <img src="<?= base_url('Assets/makam7.jpeg') ?>" alt="Makam 5" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-bh-brown mb-2 text-left font-josefin">Sacred Grounds</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">Visitors and locals alike visit these grounds to pay their respects, particularly during important Islamic calendar events like the Maulid Adat.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-sm rating" style="color: #F59E0B;" data-rating="5.0"></div> 
                                <span class="text-xs text-gray-500 font-medium">(51 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=31') ?>" class="text-bh-accent-text text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=31') ?>" class="text-bh-text text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 6 (ID: 32) -->
                <div class="bg-bh-surface rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-bh-border" onclick="window.location.href='<?= site_url('/?show=detail&id=32') ?>'">
                    <img src="<?= base_url('Assets/makam8.jpeg') ?>" alt="Makam 6" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-bh-brown mb-2 text-left font-josefin">Cultural Preservation</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">The maintenance of these tombs is entrusted to traditional caretakers (Pemangku), ensuring that the sacred customs endure for future generations.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-sm rating" style="color: #F59E0B;" data-rating="4.8"></div> 
                                <span class="text-xs text-gray-500 font-medium">(29 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=32') ?>" class="text-bh-accent-text text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=32') ?>" class="text-bh-text text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </main>

<!-- Tab Navigation Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
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
        });
    </script>
<?= $this->endSection(); ?>