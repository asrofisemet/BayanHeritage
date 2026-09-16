<?= $this->extend('layouts/landing_template') ; ?>

<?= $this->section('content') ; ?>
<body class="text-[#5C3211] font-jaldi bg-[#F8F9FA]">
    <div class="header w-full relative text-white flex flex-col justify-between p-4 md:p-6 bg-center bg-cover bg-no-repeat transition-all duration-1000 ease-in-out shadow-2xl overflow-hidden" style="height: 95vh; border-bottom: 4px solid #15803d;">
        <!-- Dark overlay to ensure text is always readable over changing images -->
        <div class="absolute inset-0 bg-black/30 pointer-events-none"></div>

        <!-- Green Glassmorphism Navigation -->
        <nav class="top-nav flex justify-between items-center px-8 py-3 bg-green-700/40 backdrop-blur-md rounded-full shadow-lg border border-white/30 relative z-10 mt-2 mx-2 md:mx-10">
            <div class="text-2xl font-bold font-josefin tracking-wider">
                Bayan Heritage
            </div>
            <div class="space-x-4 md:space-x-6 flex items-center">
                <a href="<?= base_url('login') ?>" class="text-white no-underline text-xl font-bold hover:text-yellow-300 transition-colors drop-shadow-md">Login</a>
                <span class="text-white/60 text-xl font-bold">|</span>
                <a href="<?= base_url('signup') ?>" class="text-white no-underline text-xl font-bold hover:text-yellow-300 transition-colors drop-shadow-md">Sign Up</a>
            </div>
        </nav>

        <div class="hero flex-1 flex relative z-10 transition-all duration-1000 ease-in-out p-4 md:p-10 mx-2 md:mx-10">
            <h1
                id="hero-text"
                class="text-4xl md:text-6xl font-semibold leading-relaxed inline-block text-white transition-opacity duration-500 ease-in-out font-josefin drop-shadow-2xl"> </h1>
        </div>
    </div>

    <div class="about py-10 text-[#5C3211] text-center max-w-6xl mx-auto px-4 font-josefin">  <h2 class="text-5xl font-bold mb-2">About Masjid Kuno Bayan</h2>
        <p class="mb-5 text-lg leading-normal">Masjid Kuno Bayan (Bayan Ancient Mosque) is a historical landmark and the oldest mosque on the island of Lombok, Indonesia. Built in the 17th century, it stands as a symbol of the harmonious blend between early Islamic teachings and the indigenous Sasak culture. The mosque is characterized by its traditional architecture, featuring a bamboo structure, a thatched roof, and a foundation made of river stones. To this day, it remains a sacred site where unique religious and cultural ceremonies, such as the Maulid Adat, are beautifully preserved.</p>
        <div class="video-container mt-5 flex justify-center">
            <video controls autoplay muted loop class="w-11/12 max-w-[1000px] rounded-lg">
                <source src="<?= base_url('Assets/videoLombok.mp4') ?>" type="video/mp4"> Your browser does not support the video.
            </video>
        </div>
    </div>

    <main class="main-container flex-1 overflow-y-auto mx-10">
        <div class="min-h-screen p-6 md:p-8 w-full">
            <div id="header" class="header mb-5 ">
                <?php include APPPATH . 'Views/partials/main_content_user.php'; ?>
            </div>
        </div>
    </main>
<?= $this->endSection(); ?>