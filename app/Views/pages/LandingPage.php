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
                <h2 class="text-4xl md:text-5xl font-bold text-[#5C3211] mb-6">Sacred Tombs of Bayan</h2>
                <p class="text-lg md:text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                    Surrounding the Bayan Ancient Mosque are the sacred resting places of prominent religious figures who first spread Islam in Lombok. These ancient tombs, marked by river stones and protected by traditional bamboo structures, remain significant spiritual sites for the local community and serve as a testament to the region's rich heritage.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Makam Card 1 (ID: 27) -->
                <div class="bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-[#F0B845]" onclick="window.location.href='<?= site_url('/?show=detail&id=27') ?>'">
                    <img src="<?= base_url('Assets/makam1.jpeg') ?>" alt="Makam 1" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-[#5C3211] mb-2 text-left font-josefin">Historical Heritage</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">The sacred tombs are carefully preserved by the local community, maintaining their original form with river stone foundations and traditional bamboo fencing.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-yellow-500 text-sm rating" data-rating="4.8"></div> 
                                <span class="text-xs text-gray-500 font-medium">(24 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=27') ?>" class="text-[#FF9800] text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=27') ?>" class="text-[#5C3211] text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 2 (ID: 28) -->
                <div class="bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-[#F0B845]" onclick="window.location.href='<?= site_url('/?show=detail&id=28') ?>'">
                    <img src="<?= base_url('Assets/makam2.jpeg') ?>" alt="Makam 2" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-[#5C3211] mb-2 text-left font-josefin">Spiritual Significance</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">These resting places belong to the early Islamic scholars of Lombok, making the area a focal point for spiritual reflection and traditional ceremonies.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-yellow-500 text-sm rating" data-rating="5.0"></div> 
                                <span class="text-xs text-gray-500 font-medium">(42 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=28') ?>" class="text-[#FF9800] text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=28') ?>" class="text-[#5C3211] text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 3 (ID: 29) -->
                <div class="bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-[#F0B845]" onclick="window.location.href='<?= site_url('/?show=detail&id=29') ?>'">
                    <img src="<?= base_url('Assets/makam5.jpeg') ?>" alt="Makam 3" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-[#5C3211] mb-2 text-left font-josefin">Architectural Harmony</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">The tomb structures showcase the beautiful syncretism of early Islamic teachings and indigenous Sasak cultural aesthetics, blending seamlessly with nature.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-yellow-500 text-sm rating" data-rating="4.7"></div> 
                                <span class="text-xs text-gray-500 font-medium">(18 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=29') ?>" class="text-[#FF9800] text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=29') ?>" class="text-[#5C3211] text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 4 (ID: 30) -->
                <div class="bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-[#F0B845]" onclick="window.location.href='<?= site_url('/?show=detail&id=30') ?>'">
                    <img src="<?= base_url('Assets/makam6.jpeg') ?>" alt="Makam 4" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-[#5C3211] mb-2 text-left font-josefin">Timeless Tradition</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">Covered with traditional thatched roofs (ijuk) and surrounded by ancient trees, the tombs evoke a sense of deep tranquility and historical reverence.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-yellow-500 text-sm rating" data-rating="4.9"></div> 
                                <span class="text-xs text-gray-500 font-medium">(36 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=30') ?>" class="text-[#FF9800] text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=30') ?>" class="text-[#5C3211] text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 5 (ID: 31) -->
                <div class="bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-[#F0B845]" onclick="window.location.href='<?= site_url('/?show=detail&id=31') ?>'">
                    <img src="<?= base_url('Assets/makam7.jpeg') ?>" alt="Makam 5" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-[#5C3211] mb-2 text-left font-josefin">Sacred Grounds</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">Visitors and locals alike visit these grounds to pay their respects, particularly during important Islamic calendar events like the Maulid Adat.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-yellow-500 text-sm rating" data-rating="5.0"></div> 
                                <span class="text-xs text-gray-500 font-medium">(51 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=31') ?>" class="text-[#FF9800] text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=31') ?>" class="text-[#5C3211] text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makam Card 6 (ID: 32) -->
                <div class="bg-[#FFFFFF] rounded-2xl overflow-hidden shadow-lg transition duration-300 hover:-translate-y-1.5 hover:shadow-2xl cursor-pointer flex flex-col border border-transparent hover:border-[#F0B845]" onclick="window.location.href='<?= site_url('/?show=detail&id=32') ?>'">
                    <img src="<?= base_url('Assets/makam8.jpeg') ?>" alt="Makam 6" class="w-full h-52 object-cover">
                    <div class="p-5 flex flex-col flex-1 font-jaldi">
                        <div class="text-xl font-bold text-[#5C3211] mb-2 text-left font-josefin">Cultural Preservation</div>
                        <p class="text-gray-700 text-sm flex-1 mb-4 leading-relaxed line-clamp-3 text-justify">The maintenance of these tombs is entrusted to traditional caretakers (Pemangku), ensuring that the sacred customs endure for future generations.</p>
                        
                        <div class="flex flex-col gap-2 border-t border-gray-100 pt-3 mt-auto">
                            <div class="flex justify-between items-center">
                                <div class="text-yellow-500 text-sm rating" data-rating="4.8"></div> 
                                <span class="text-xs text-gray-500 font-medium">(29 reviews)</span>
                            </div>
                            <div class="flex justify-between items-center mt-1">
                                <a href="<?= site_url('/?show=detail&id=32') ?>" class="text-[#FF9800] text-sm font-bold hover:underline flex items-center gap-1" onclick="event.stopPropagation()">
                                    <i class="fa-solid fa-comment-dots"></i> Add Comment
                                </a>
                                <a href="<?= site_url('/?show=detail&id=32') ?>" class="text-[#5C3211] text-sm font-medium hover:underline" onclick="event.stopPropagation()">See details &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </main>
<?= $this->endSection(); ?>