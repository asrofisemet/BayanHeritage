<?php
if (!isset($current_query)) {
    $current_query = request()->getGet();
}
$active_category = $current_query['category'] ?? '';

$filter_buttons = [];
foreach ($categories as $key => $details) {
    $is_active = ($active_category == $key) || (empty($active_category) && $key === 'tourist_destination');
    $temp_query = $current_query;

    if ($active_category == $key) {
        unset($temp_query['category']);
    } else {
        $temp_query['category'] = $key;
    }

    $filter_buttons[] = [
        'url'       => $path . '?' . http_build_query($temp_query),
        'label'     => $details['label'],
        'icon'      => $details['icon'],
        'is_active' => $is_active,
    ];
}
?>

<?php if (isset($show_detail_tempat) && $show_detail_tempat === true) : ?>
<!-- ═══════════════════════════════════════════════════════
     DETAIL TEMPAT VIEW
═══════════════════════════════════════════════════════ -->
<div id="detailPlaceContentPanel" class="w-full">
    <div class="relative z-10 text-left mb-6">
        <a href="<?= $path ?>" class="inline-flex items-center gap-2 text-[#1B3828] hover:text-emerald-700 font-semibold mb-4 transition">
            <i class="fa-solid fa-arrow-left text-lg"></i>
            <span>Kembali ke Beranda</span>
        </a>
        <h1 class="text-3xl md:text-4xl font-bold font-heading text-[#1B3828] mb-2">
            <?= esc($tempat['nama_tempat']) ?>
        </h1>
        <?php if (!empty($tempat['badge'])) : ?>
            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-[#1B3828] text-white">
                <?= esc($tempat['badge']) ?>
            </span>
        <?php endif; ?>
    </div>

    <?php if ((isset($isOwner) && $isOwner) || session()->get('user_role') === 'admin') : ?>
        <div class="text-right pb-4">
            <button type="button" id="openEditTempatModal" class="bg-[#1B3828] text-white font-bold hover:bg-[#142B1E] px-7 py-2 rounded-full transition shadow-sm">
                Edit Tempat
            </button>
        </div>
    <?php endif; ?>

    <?php if ($tempat['kategori'] === 'culinary' && session()->get('isLoggedIn') && !$isOwner && $tempat['ID_akun'] === NULL) : ?>
        <div class="flex justify-end items-center space-x-3 mb-4">
            <span class="text-sm font-semibold text-gray-700">Own this place?</span>
            <div id="openClaimBtn" class="bg-[#1B3828] text-white font-bold hover:bg-[#142B1E] px-6 py-1.5 rounded-full cursor-pointer text-sm transition shadow-sm">
                Claim
            </div>
        </div>
    <?php endif; ?>

    <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-md mb-8 border border-gray-100">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3 flex-shrink-0">
                <div class="overflow-hidden rounded-xl shadow-md mb-3 bg-gray-100">
                    <img src="<?= base_url('Assets/' . esc($tempat['foto'])) ?>" 
                         alt="<?= esc($tempat['nama_tempat']) ?>" 
                         class="w-full h-64 object-cover"
                         onerror="this.onerror=null; this.src='<?= base_url('Assets/bayan1.jpeg') ?>';">
                </div>
                <p class="text-xs text-[#5C4A3A] mb-2 font-bold leading-relaxed">
                    <i class="fa-solid fa-location-dot text-[#1B3828] mr-1"></i>
                    <?= esc($tempat['kelurahan']) ?>, Kec. <?= esc($tempat['kecamatan']) ?>, Kabupaten <?= esc($tempat['kabupaten_kota']) ?>, Nusa Tenggara Barat
                </p>
                <?php if (!empty($tempat['google_maps'])) : ?>
                    <a href="<?= esc($tempat['google_maps']) ?>" target="_blank" class="text-[#1B3828] text-xs font-semibold hover:underline inline-flex items-center gap-1.5 mb-3">
                        <span>Buka di Google Maps</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </a>
                <?php endif; ?>
                
                <?php if ($tempat['kategori'] === 'culinary') : ?>
                    <div class="flex items-center gap-3 mt-3">
                        <div id="openMenu" class="bg-[#1B3828] text-white font-bold hover:bg-[#142B1E] px-6 py-2 rounded-full cursor-pointer text-xs transition">
                            Menu
                        </div>
                        <div id="openPromo" class="bg-[#8A4A28] text-white font-bold hover:bg-[#6D381D] px-6 py-2 rounded-full cursor-pointer text-xs transition">
                            Promo
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="md:w-2/3 flex flex-col justify-start">
                <div class="flex items-center gap-2 mb-4">
                    <div class="text-amber-500 text-base rating" data-rating="<?= number_format($tempat['average_rating'] ?? 5, 1) ?>"></div>
                    <span class="text-xs text-gray-500 font-semibold">(<?= number_format($tempat['average_rating'] ?? 5, 1) ?> dari 5 bintang)</span>
                </div>

                <div class="space-y-4 text-sm">
                    <div>
                        <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold block mb-1">Kategori</span>
                        <span class="font-medium text-gray-800">
                            <?= ($tempat['kategori'] === 'culinary') ? 'Kuliner & Tradisi Adat' : 'Wisata Budaya & Cagar Sejarah' ?>
                        </span>
                    </div>

                    <?php if ($tempat['kategori'] !== 'culinary' && !empty($tempat['harga_tiket'])) : ?>
                    <div>
                        <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold block mb-1">Tiket Masuk / Donasi</span>
                        <span class="font-semibold text-emerald-800">Rp<?= number_format($tempat['harga_tiket'], 0, ',', '.') ?></span>
                    </div>
                    <?php endif; ?>

                    <div>
                        <span class="text-xs uppercase tracking-wider text-gray-400 font-semibold block mb-1">Deskripsi &amp; Filosofi</span>
                        <p class="text-gray-700 leading-relaxed text-justify">
                            <?= esc($tempat['deskripsi']) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    include APPPATH . 'Views/partials/review_dan_modalnya.php';
    include APPPATH . 'Views/partials/modal_menu.php';
    include APPPATH . 'Views/partials/modal_promo.php';
    ?>
</div>

<?php else : ?>
<!-- ═══════════════════════════════════════════════════════
     HOMEPAGE VIEW (MATCHING MOCKUP IMAGE 1)
═══════════════════════════════════════════════════════ -->

<!-- Top Header Section (Deep Forest Green Curved Banner) -->
<header class="main-header-banner px-6 sm:px-10 lg:px-16 pt-10 pb-12 text-center text-white mb-8">
    
    <!-- Top Pill Badge -->
    <div class="flex justify-center mb-4">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-[11px] sm:text-xs font-semibold tracking-wider text-white bg-white/10 border border-white/15 backdrop-blur-md uppercase shadow-sm">
            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
            KAWASAN ADAT WETU TELU BAYAN, LOMBOK UTARA
        </span>
    </div>

    <!-- Main Heading -->
    <h1 class="text-white text-3xl sm:text-4xl md:text-5xl font-bold font-heading italic mb-6 tracking-wide drop-shadow-sm">
        Where do you want to go?
    </h1>

    <!-- Category Filter Tabs -->
    <div class="filter-tabs flex justify-center flex-wrap gap-2.5 sm:gap-3 mb-6">
        <?php foreach ($filter_buttons as $button) : ?>
            <a href="<?= $button['url'] ?>"
               class="bh-filter-btn <?= $button['is_active'] ? 'active' : 'inactive' ?>">
                <i class="<?= $button['icon'] ?>"></i>
                <span><?= $button['label'] ?></span>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Search Bar -->
    <div class="search-container flex justify-center w-full">
        <form action="<?= $path ?>" method="get" class="relative w-full max-w-[580px]">
            <input type="text" id="search_input" name="search" 
                   class="bh-search-box" 
                   placeholder="Cari spot cagar budaya, makam sakral, atau ritual adat..." 
                   value="<?= esc($current_search_term ?? '') ?>">
            <button type="submit" id="searchButton" class="bh-search-btn" aria-label="Cari">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>
</header>

<!-- Main Cards Container -->
<section class="px-6 sm:px-10 lg:px-14 pb-16">
    <?php if (!empty($current_search_term)) : ?>
        <div class="mb-6 text-center">
            <h3 class="text-xl font-bold text-[#1B3828]">
                Hasil pencarian untuk: "<span class="italic"><?= esc($current_search_term) ?></span>"
            </h3>
            <a href="<?= $path ?>" class="text-xs text-gray-500 hover:underline mt-1 inline-block">Hapus pencarian</a>
        </div>
    <?php endif; ?>

    <!-- 3-Column Responsive Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-7">
        <?php if (!empty($destinasi) && is_array($destinasi)) : ?>
            <?php foreach ($destinasi as $tempat) : 
                $detailUrl = (isset($isLoggedIn) && $isLoggedIn) ? 
                              site_url('home?show=detail&id=' . $tempat['ID_tempat']) : 
                              site_url('/?show=detail&id=' . $tempat['ID_tempat']);
                $badgeText = $tempat['badge'] ?? '';
                if (empty($badgeText)) {
                    if (stripos($tempat['nama_tempat'], 'Masjid') !== false) $badgeText = 'Situs Abad ke-17';
                    elseif (stripos($tempat['nama_tempat'], 'Makam') !== false) $badgeText = 'Ziarah Sakral';
                    elseif (stripos($tempat['nama_tempat'], 'Desa') !== false) $badgeText = 'Masyarakat Adat';
                    elseif (stripos($tempat['nama_tempat'], 'Maulid') !== false) $badgeText = 'Ritual Tahunan';
                    elseif (stripos($tempat['nama_tempat'], 'Hutan') !== false) $badgeText = 'Awig-awig Alam';
                }
            ?>
                <!-- Destination Card -->
                <div class="destination-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col border border-gray-100/90 group"
                     onclick="window.location.href='<?= $detailUrl ?>'">
                    
                    <!-- Card Top Image with Overlaid Badge -->
                    <div class="relative h-52 sm:h-56 w-full overflow-hidden bg-gray-100">
                        <img src="<?= base_url('Assets/' . esc($tempat['foto'])) ?>" 
                             alt="<?= esc($tempat['nama_tempat']) ?>" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                             onerror="this.onerror=null; this.src='<?= base_url('Assets/bayan1.jpeg') ?>';">
                        
                        <?php if (!empty($badgeText)) : ?>
                            <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-[11px] font-semibold text-white bg-[#1B3828]/90 backdrop-blur-sm shadow-sm">
                                <?= esc($badgeText) ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 flex flex-col flex-1">
                        <h3 class="text-base sm:text-lg font-bold text-[#1B3828] mb-1.5 font-sans group-hover:text-emerald-800 transition">
                            <?= esc($tempat['nama_tempat']) ?>
                        </h3>
                        
                        <p class="text-xs sm:text-sm text-gray-500 line-clamp-2 leading-relaxed mb-4">
                            <?= esc($tempat['deskripsi']) ?>
                        </p>

                        <!-- Bottom Review / Rating & Details -->
                        <div class="mt-auto pt-3 border-t border-gray-100 flex items-center justify-between">
                            <div class="flex items-center gap-1.5">
                                <div class="text-amber-500 text-sm tracking-tight">
                                    <?php
                                    $ratingVal = round($tempat['average_rating'] ?? 5);
                                    for ($s = 1; $s <= 5; $s++) {
                                        echo $s <= $ratingVal ? '★' : '☆';
                                    }
                                    ?>
                                </div>
                                <span class="text-xs text-gray-400 font-medium">
                                    (<?= esc($tempat['review_count'] ?? ($tempat['real_review_count'] ?? 100)) ?>)
                                </span>
                            </div>

                            <a href="<?= $detailUrl ?>" 
                               class="text-xs font-semibold text-gray-600 hover:text-[#1B3828] hover:underline"
                               onclick="event.stopPropagation()">
                                See details
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-span-3 text-center py-16 bg-white rounded-2xl shadow-sm border border-gray-100">
                <i class="fa-solid fa-compass text-4xl text-gray-300 mb-3 block"></i>
                <p class="text-gray-500 font-medium">Belum ada data destinasi yang cocok dengan pencarian.</p>
                <a href="<?= $path ?>" class="inline-block mt-3 text-xs text-[#1B3828] font-bold hover:underline">Tampilkan Semua</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <?php if ($pager) : ?>
        <div class="mt-10 flex justify-center text-[#1B3828] font-bold">
            <?= $pager->links() ?>
        </div>
    <?php endif ?>
</section>
<?php endif; ?>

<?php include APPPATH . 'Views/partials/modal_edit_tempat.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const openEditTempatModalBtn = document.getElementById('openEditTempatModal');
    const editTempatModal = document.getElementById('editTempatModal');
    const closeEditTempatModalBtn = document.getElementById('closeEditTempatModal');
    const cancelEditTempatBtn = document.getElementById('cancelEditTempatBtn');

    function openModal(modal) {
        if (!modal) return;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modal) {
        if (!modal) return;
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    if(openEditTempatModalBtn) openEditTempatModalBtn.addEventListener('click', () => openModal(editTempatModal));
    if(closeEditTempatModalBtn) closeEditTempatModalBtn.addEventListener('click', () => closeModal(editTempatModal));
    if(cancelEditTempatBtn) cancelEditTempatBtn.addEventListener('click', () => closeModal(editTempatModal));
    if(editTempatModal) editTempatModal.addEventListener('click', (e) => { if(e.target === editTempatModal) closeModal(editTempatModal); });

    const searchInput = document.getElementById('search_input');
    const searchButton = document.getElementById('searchButton');
    if (searchInput && searchButton) {
        function submitSearchForm() { searchInput.closest('form').submit(); }
        searchInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') { e.preventDefault(); submitSearchForm(); }});
        searchButton.addEventListener('click', submitSearchForm);
    }

    function generateStars(element) {
        if (!element) return;
        const rating = parseFloat(element.dataset.rating);
        if (isNaN(rating)) return;
        let starsHTML = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= rating) starsHTML += '<i class="fas fa-star" style="color: #F59E0B;"></i>';
            else if (i - 0.5 <= rating) starsHTML += '<i class="fas fa-star-half-alt" style="color: #F59E0B;"></i>';
            else starsHTML += '<i class="far fa-star text-gray-400"></i>';
        }
        element.innerHTML = starsHTML;
    }
    document.querySelectorAll(".rating").forEach(generateStars);

    const openMenuBtn = document.getElementById('openMenu');
    const menuModal = document.getElementById('menuModal');
    const closeMenuModalBtn = document.getElementById('closeMenuModal');
    const openPromoBtn = document.getElementById('openPromo');
    const promoModal = document.getElementById('promoModal');
    const closePromoModalBtn = document.getElementById('closePromoModal');

    if(openMenuBtn) openMenuBtn.addEventListener('click', () => openModal(menuModal));
    if(closeMenuModalBtn) closeMenuModalBtn.addEventListener('click', () => closeModal(menuModal));
    if(openPromoBtn) openPromoBtn.addEventListener('click', () => openModal(promoModal));
    if(closePromoModalBtn) closePromoModalBtn.addEventListener('click', () => closeModal(promoModal));
    if(menuModal) menuModal.addEventListener('click', (e) => { if(e.target === menuModal) closeModal(menuModal); });
    if(promoModal) promoModal.addEventListener('click', (e) => { if(e.target === promoModal) closeModal(promoModal); });
});
</script>
