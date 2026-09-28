<div id="accountSetting" class="bg-bh-surface text-bh-text hidden rounded-xl p-8 shadow-md overflow-hidden mt-8 border border-bh-border">
    <div class="w-full relative">
        <button id="closeAccountSettingBtn" class="absolute top-0 right-0 text-bh-text hover:bg-gray-100 rounded-full transition w-8 h-8 flex items-center justify-center" title="Close">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>

        <div class="mb-4">
            <span class="text-3xl font-bold">Account settings</span>
        </div>

        <hr class="border-t border-bh-border/30 my-6">

        <div>
            <div class="mb-4">
                <span class="text-xl font-semibold">Change password</span>
            </div>
            <div class="flex flex-col max-w-sm gap-4"> 
                <input type="password" id="currentPassword" placeholder="Current password" class="border border-bh-border rounded-lg px-4 py-2 focus:outline-none focus:border-bh-primary">
                <div class="relative">
                    <input id="newPass" type="password" placeholder="New password" class="border border-bh-border w-full rounded-lg px-4 py-2 focus:outline-none focus:border-bh-primary">
                    <p id="passwordError" class="absolute mt-1 text-sm text-red-500 hidden">Password need to contain at least 8 characters.</p>
                </div>
            </div>
            <button id="savePasswordBtn" class="border border-bh-primary text-white hover:bg-bh-primary/80 hover:text-white/80 px-7 py-1 rounded-full shadow font-semibold flex items-center gap-2 transition mt-8">
                Save new password
            </button>
    </div>
</div>