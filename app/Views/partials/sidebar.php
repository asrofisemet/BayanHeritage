<?php // app/Views/partials/sidebar.php ?>

<aside class="w-20 flex flex-col items-center fixed top-0 left-0 h-screen z-20 bg-white border-r border-gray-200/80 shadow-sm py-4">
    <!-- Hamburger button (Top) -->
    <div class="mb-5">
        <div id="hamburgerBtn" class="w-10 h-10 rounded-lg flex items-center justify-center text-gray-700 cursor-pointer transition hover:bg-gray-100 hover:text-[#1B3828]" title="Menu">
            <i class="fa-solid fa-bars text-xl"></i>
        </div>
    </div>

    <!-- Navigation Icons -->
    <div class="flex-1 flex flex-col items-center space-y-4">
        <!-- Home Icon (Active: Dark green rounded square) -->
        <a href="<?= base_url('/home') ?>" class="w-11 h-11 rounded-2xl bg-[#1B3828] text-white flex items-center justify-center shadow-md cursor-pointer transition hover:bg-[#153123]" title="Home">
            <i class="fa-solid fa-house text-lg"></i>
        </a>

        <!-- Add Place Icon -->
        <div id="addPlaceBtn" class="w-10 h-10 rounded-xl text-gray-600 hover:text-[#1B3828] hover:bg-gray-100 flex items-center justify-center cursor-pointer transition" title="Add Place">
            <i class="fa-solid fa-plus text-lg"></i>
        </div>

        <!-- Notification Icon with Green Indicator Dot -->
        <div id="notificationBtn" class="relative w-10 h-10 rounded-xl text-gray-600 hover:text-[#1B3828] hover:bg-gray-100 flex items-center justify-center cursor-pointer transition" title="Notifications">
            <i class="fa-solid fa-bell text-lg"></i>
            <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-emerald-500"></span>
        </div>

        <?php if ($user_role == 'admin') : ?>
            <div id="manageVerificationBtn" class="w-10 h-10 rounded-xl text-gray-600 hover:text-[#1B3828] hover:bg-gray-100 flex items-center justify-center cursor-pointer transition" title="Verifikasi">
                <i class="fa-solid fa-clipboard-check text-lg"></i>
            </div>
        <?php endif; ?>

        <?php if ($user_role == 'pemilik') : ?>
            <!-- Arrows up-down icon for pemilik -->
            <div id="manageBtn" class="w-10 h-10 rounded-xl text-gray-600 hover:text-[#1B3828] hover:bg-gray-100 flex items-center justify-center cursor-pointer transition" title="Kelola Tempat Saya">
                <i class="fa-solid fa-arrows-up-down text-lg"></i>
            </div>
        <?php endif; ?>
    </div>

    <!-- User Profile Avatar Badge (Bottom: BY) -->
    <div class="mt-auto">
        <div id="profilBtn" class="w-10 h-10 rounded-full bg-[#E5E7EB] text-gray-700 font-bold text-xs flex items-center justify-center cursor-pointer hover:bg-gray-300 transition shadow-inner" title="Profil Pengguna">
            BY
        </div>
    </div>
</aside>

<!-- Off-Canvas Sidebar Menu -->
<div id="sidebarMenu" class="pt-4 text-[#1B3828] fixed top-0 left-0 w-72 h-screen bg-white shadow-2xl z-[200] flex flex-col duration-300 ease-in-out -translate-x-full border-r border-gray-200">
    <div class="px-5 pb-5 border-b border-gray-100">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-9 h-9 rounded-xl bg-[#1B3828] text-white flex items-center justify-center font-bold text-sm">
                    BH
                </div>
                <span class="text-xl font-bold font-serif text-[#1B3828]">Bayan<span class="text-amber-800">Heritage</span></span>
            </div>
            <div class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-500 cursor-pointer hover:bg-gray-100" id="closeBtn">
                <i class="fa-solid fa-xmark text-lg"></i>
            </div>
        </div>
    </div>

    <div class="flex-1 px-4 py-5 space-y-2 overflow-y-auto">
        <a href="<?= base_url('/home') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition bg-gray-100 text-[#1B3828] font-semibold">
            <span class="w-8 h-8 flex items-center justify-center text-base"><i class="fa-solid fa-house"></i></span>
            <span class="text-sm">Home</span>
        </a>

        <a href="#" id="openAddPlaceBtn" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition text-gray-700 hover:bg-gray-50 font-medium">
            <span class="w-8 h-8 flex items-center justify-center text-base text-gray-500"><i class="fa-solid fa-plus"></i></span>
            <span class="text-sm">Add Place</span>
        </a>

        <a href="#" id="openNotificationBtn" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition text-gray-700 hover:bg-gray-50 font-medium">
            <span class="w-8 h-8 flex items-center justify-center text-base text-gray-500"><i class="fa-solid fa-bell"></i></span>
            <span class="text-sm">Notifications</span>
        </a>

        <?php if ($user_role == 'admin'): ?>
            <a href="#" id="openManageVerificationBtn" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition text-gray-700 hover:bg-gray-50 font-medium">
                <span class="w-8 h-8 flex items-center justify-center text-base text-gray-500"><i class="fa-solid fa-clipboard-check"></i></span>
                <span class="text-sm">Manage Verification</span>
            </a>
        <?php endif; ?>

        <?php if (isset($user_role) && $user_role == 'pemilik'): ?>
            <div class="flex flex-col rounded-xl transition hover:bg-gray-50">
                <div id="openManageBtn" class="flex items-center gap-3 px-3 py-2.5 cursor-pointer text-gray-700 font-medium">
                    <span class="w-8 h-8 flex items-center justify-center text-base text-gray-500"><i class="fa-solid fa-arrows-up-down"></i></span>
                    <span class="text-sm">Kelola Tempat Saya</span>
                </div>
                
                <div id="listPlace" class="w-full pl-11 pr-2 pb-2 hidden space-y-1">
                    <?php if (!empty($owned_places)) : ?>
                        <?php foreach ($owned_places as $place) : ?>
                            <div>
                                <a href="<?= site_url('home?show=detail&id=' . $place['ID_tempat']) ?>" 
                                   class="block text-gray-600 text-xs py-1 hover:text-[#1B3828] hover:underline">
                                    • <?= esc($place['nama_tempat']) ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <span class="text-gray-400 text-xs italic">
                            Belum ada tempat yang Anda miliki.
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Bottom Profile Area in Drawer -->
    <div class="p-4 border-t border-gray-100">
        <div id="openProfilBtn" class="flex items-center gap-3 p-2 rounded-xl cursor-pointer hover:bg-gray-50 transition">
            <div class="w-10 h-10 rounded-full bg-[#1B3828] text-white font-bold text-xs flex items-center justify-center">
                BY
            </div>
            <div class="flex flex-col min-w-0">
                <span class="text-sm font-semibold text-gray-800 truncate"><?= esc(session()->get('username')) ?></span> 
                <span class="text-xs text-gray-400 truncate"><?= esc(session()->get('email')) ?></span>
            </div>
        </div>
    </div>
</div>
