/* ============================================
   BAYAN HERITAGE CHATBOT - JavaScript
   Chatbot Berbasis Tombol (Rule-Based FAQ)
   ============================================ */

(function () {
    'use strict';

    // ========================
    // DATA FAQ (Konten Pertanyaan & Jawaban)
    // ========================
    const FAQ_DATA = [
        {
            id: 'sejarah',
            question: 'Bagaimana sejarah Masjid Kuno Bayan Beleq?',
            answer: 'Masjid ini merupakan salah satu situs penyebaran Islam tertua di Lombok, dibangun pada abad ke-17 dengan arsitektur tradisional yang sangat khas. Struktur masjid menggunakan bahan alami seperti bambu, alang-alang, dan batu kali yang mencerminkan kearifan lokal masyarakat Sasak. 🕌'
        },
        {
            id: 'pakaian',
            question: 'Apa aturan pakaian saat berkunjung ke area masjid?',
            answer: 'Pengunjung diwajibkan mengenakan pakaian adat Sasak, seperti dodot (kain tenun) dan jong (ikat kepala), serta menjaga tata krama dan kesopanan. Pakaian adat ini dapat dipinjam di lokasi dari pemandu setempat. 👘'
        },
        {
            id: 'lokasi',
            question: 'Di mana lokasi pastinya?',
            answer: 'Terletak di Desa Bayan, Kecamatan Bayan, Kabupaten Lombok Utara, Nusa Tenggara Barat, Indonesia. Lokasi ini berjarak sekitar 80 km dari Kota Mataram dan dapat diakses melalui jalur darat melewati pemandangan alam Lombok yang indah. 📍'
        },
        {
            id: 'maulid',
            question: 'Kapan perayaan Maulid Adat biasanya diselenggarakan?',
            answer: 'Maulid Adat dirayakan sesuai penanggalan kalender adat setempat, biasanya diisi dengan ritual tradisional dan dzikir bersama yang kental dengan budaya Wetu Telu. Perayaan ini menjadi momentum penting bagi masyarakat Bayan untuk melestarikan tradisi leluhur. 🌙'
        }
    ];

    const WELCOME_MESSAGE = 'Selamat datang di Bayan Heritage! 🌿 Saya asisten virtual yang siap membantu Anda mengenal lebih dekat Masjid Kuno Bayan Beleq. Silakan pilih pertanyaan di bawah ini.';

    // ========================
    // STATE
    // ========================
    let isOpen = false;
    let isFirstOpen = true;
    let answeredQuestions = new Set();

    // ========================
    // UTILITY: Mendapatkan Waktu Sekarang
    // ========================
    function getCurrentTime() {
        const now = new Date();
        return now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
    }

    // ========================
    // DOM BUILDER
    // ========================
    function buildChatbotDOM() {
        // -- Toggle Button --
        const toggleBtn = document.createElement('button');
        toggleBtn.id = 'chatbot-toggle-btn';
        toggleBtn.setAttribute('aria-label', 'Buka chatbot Bayan Heritage');
        toggleBtn.innerHTML = `
            <span class="chatbot-icon-chat">💬</span>
            <span class="chatbot-icon-close">✕</span>
            <span id="chatbot-badge">1</span>
        `;

        // -- Container --
        const container = document.createElement('div');
        container.id = 'chatbot-container';
        container.setAttribute('role', 'dialog');
        container.setAttribute('aria-label', 'Chatbot Bayan Heritage');

        container.innerHTML = `
            <!-- Header -->
            <div id="chatbot-header">
                <div class="chatbot-avatar">🕌</div>
                <div class="chatbot-header-info">
                    <h3>Bayan Heritage</h3>
                    <p><span class="chatbot-status-dot"></span>Asisten Virtual • Online</p>
                </div>
            </div>

            <!-- Messages -->
            <div id="chatbot-messages" aria-live="polite"></div>

            <!-- Options (FAQ Buttons) -->
            <div id="chatbot-options">
                <div class="chatbot-opt-label">Pilih Pertanyaan</div>
            </div>

            <!-- Footer -->
            <div id="chatbot-footer">
                Didukung oleh <span>Bayan Heritage</span> &mdash; Wisata Budaya Lombok
            </div>
        `;

        document.body.appendChild(toggleBtn);
        document.body.appendChild(container);

        // Render FAQ buttons
        renderFAQButtons();

        // Bind toggle
        toggleBtn.addEventListener('click', toggleChatbot);
    }

    // ========================
    // RENDER FAQ BUTTONS
    // ========================
    function renderFAQButtons() {
        const optionsContainer = document.getElementById('chatbot-options');
        const label = optionsContainer.querySelector('.chatbot-opt-label');

        // Remove existing buttons (but keep label)
        optionsContainer.querySelectorAll('.chatbot-opt-btn').forEach(btn => btn.remove());

        FAQ_DATA.forEach((faq) => {
            const btn = document.createElement('button');
            btn.className = 'chatbot-opt-btn';
            btn.setAttribute('data-faq-id', faq.id);
            btn.textContent = faq.question;

            if (answeredQuestions.has(faq.id)) {
                btn.classList.add('disabled');
                btn.setAttribute('aria-disabled', 'true');
            }

            btn.addEventListener('click', () => handleFAQClick(faq, btn));
            optionsContainer.appendChild(btn);
        });

        // If all answered, show reset
        if (answeredQuestions.size === FAQ_DATA.length) {
            label.textContent = 'Semua pertanyaan telah dijawab';

            const resetBtn = document.createElement('button');
            resetBtn.className = 'chatbot-opt-btn';
            resetBtn.textContent = 'Mulai ulang percakapan';
            resetBtn.style.borderColor = '#43A047';
            resetBtn.style.color = '#2E7D32';
            resetBtn.style.fontWeight = '600';
            resetBtn.addEventListener('click', resetChat);
            optionsContainer.appendChild(resetBtn);
        } else {
            label.textContent = 'Pilih Pertanyaan';
        }
    }

    // ========================
    // TOGGLE CHATBOT
    // ========================
    function toggleChatbot() {
        isOpen = !isOpen;
        const container = document.getElementById('chatbot-container');
        const toggleBtn = document.getElementById('chatbot-toggle-btn');
        const badge = document.getElementById('chatbot-badge');

        if (isOpen) {
            container.classList.add('open');
            toggleBtn.classList.add('active');
            toggleBtn.setAttribute('aria-label', 'Tutup chatbot');

            // Hide badge
            if (badge) badge.style.display = 'none';

            // Show welcome on first open
            if (isFirstOpen) {
                isFirstOpen = false;
                showWelcome();
            }
        } else {
            container.classList.remove('open');
            toggleBtn.classList.remove('active');
            toggleBtn.setAttribute('aria-label', 'Buka chatbot Bayan Heritage');
        }
    }

    // ========================
    // WELCOME MESSAGE
    // ========================
    function showWelcome() {
        const messages = document.getElementById('chatbot-messages');

        // Welcome card
        const welcomeDiv = document.createElement('div');
        welcomeDiv.className = 'chatbot-welcome';
        welcomeDiv.innerHTML = `
            <div class="chatbot-welcome-icon">🌿</div>
            <h4>Selamat Datang!</h4>
            <p>Jelajahi warisan budaya Masjid Kuno Bayan Beleq</p>
        `;
        messages.appendChild(welcomeDiv);

        // Divider
        const divider = document.createElement('div');
        divider.className = 'chatbot-divider';
        divider.textContent = 'Percakapan dimulai';
        messages.appendChild(divider);

        // Bot greeting message
        setTimeout(() => {
            addBotMessage(WELCOME_MESSAGE);
        }, 400);
    }

    // ========================
    // FAQ CLICK HANDLER
    // ========================
    function handleFAQClick(faq, btnElement) {
        if (answeredQuestions.has(faq.id)) return;

        // Mark as answered
        answeredQuestions.add(faq.id);
        btnElement.classList.add('disabled');
        btnElement.setAttribute('aria-disabled', 'true');

        // 1. Show user message
        addUserMessage(faq.question);

        // 2. Show typing indicator then bot reply
        showTypingIndicator();

        setTimeout(() => {
            removeTypingIndicator();
            addBotMessage(faq.answer);

            // Re-render buttons (to update disabled states / show reset)
            renderFAQButtons();
        }, 800 + Math.random() * 400); // 0.8–1.2s for natural feel
    }

    // ========================
    // ADD USER MESSAGE
    // ========================
    function addUserMessage(text) {
        const messages = document.getElementById('chatbot-messages');

        const msgDiv = document.createElement('div');
        msgDiv.className = 'chatbot-msg user';
        msgDiv.innerHTML = `
            <div class="chatbot-msg-avatar">👤</div>
            <div class="chatbot-bubble">${escapeHTML(text)}</div>
        `;
        messages.appendChild(msgDiv);

        // Timestamp
        const timeDiv = document.createElement('div');
        timeDiv.className = 'chatbot-time';
        timeDiv.style.textAlign = 'right';
        timeDiv.textContent = getCurrentTime();
        messages.appendChild(timeDiv);

        scrollToBottom();
    }

    // ========================
    // ADD BOT MESSAGE
    // ========================
    function addBotMessage(text) {
        const messages = document.getElementById('chatbot-messages');

        const msgDiv = document.createElement('div');
        msgDiv.className = 'chatbot-msg bot';
        msgDiv.innerHTML = `
            <div class="chatbot-msg-avatar">🕌</div>
            <div class="chatbot-bubble">${escapeHTML(text)}</div>
        `;
        messages.appendChild(msgDiv);

        // Timestamp
        const timeDiv = document.createElement('div');
        timeDiv.className = 'chatbot-time';
        timeDiv.style.textAlign = 'left';
        timeDiv.textContent = getCurrentTime();
        messages.appendChild(timeDiv);

        scrollToBottom();
    }

    // ========================
    // TYPING INDICATOR
    // ========================
    function showTypingIndicator() {
        const messages = document.getElementById('chatbot-messages');

        const typingDiv = document.createElement('div');
        typingDiv.className = 'chatbot-typing';
        typingDiv.id = 'chatbot-typing-indicator';
        typingDiv.innerHTML = `
            <div class="chatbot-msg-avatar" style="
                width:30px;height:30px;border-radius:50%;
                display:flex;align-items:center;justify-content:center;
                font-size:14px;flex-shrink:0;
                background:linear-gradient(135deg,#388E3C,#2E7D32);
                color:#fff;box-shadow:0 2px 6px rgba(27,94,32,0.2)
            ">🕌</div>
            <div class="chatbot-typing-dots">
                <span></span><span></span><span></span>
            </div>
        `;
        messages.appendChild(typingDiv);
        scrollToBottom();
    }

    function removeTypingIndicator() {
        const indicator = document.getElementById('chatbot-typing-indicator');
        if (indicator) indicator.remove();
    }

    // ========================
    // RESET CHAT
    // ========================
    function resetChat() {
        const messages = document.getElementById('chatbot-messages');
        messages.innerHTML = '';
        answeredQuestions.clear();

        // Divider
        const divider = document.createElement('div');
        divider.className = 'chatbot-divider';
        divider.textContent = 'Percakapan baru';
        messages.appendChild(divider);

        setTimeout(() => {
            addBotMessage('Percakapan dimulai ulang! 🔄 Silakan pilih pertanyaan yang ingin Anda ketahui tentang Masjid Kuno Bayan Beleq.');
            renderFAQButtons();
        }, 300);
    }

    // ========================
    // HELPERS
    // ========================
    function scrollToBottom() {
        const messages = document.getElementById('chatbot-messages');
        requestAnimationFrame(() => {
            messages.scrollTop = messages.scrollHeight;
        });
    }

    function escapeHTML(str) {
        const div = document.createElement('div');
        div.textContent = str;
        return div.innerHTML;
    }

    // ========================
    // INIT
    // ========================
    function init() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', buildChatbotDOM);
        } else {
            buildChatbotDOM();
        }
    }

    init();
})();
