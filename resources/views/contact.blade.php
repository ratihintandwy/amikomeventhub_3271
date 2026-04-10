<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak — AmikomEventHub</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #800000;
            --brown: #633A2C;
            --copper: #B8842C;
            --cream: #E0D6B8;
            --bg: #130606;
            --surface: #1c0909;
            --surface2: #251010;
            --surface3: #2f1414;
            --border: rgba(128, 0, 0, 0.3);
            --border2: rgba(184, 132, 44, 0.18);
            --text: #E0D6B8;
            --muted: rgba(224, 214, 184, 0.55);
            --subtle: rgba(224, 214, 184, 0.25);
        }

        * {
            font-family: 'DM Sans', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-wrap {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 36px;
            height: 62px;
        }

        .logo {
            font-size: 15px;
            font-weight: 700;
            color: var(--text);
            text-decoration: none;
        }

        .logo span {
            color: var(--copper);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2px;
        }

        .nl {
            font-size: 13px;
            font-weight: 500;
            color: var(--muted);
            padding: 7px 15px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.15s;
        }

        .nl:hover {
            color: var(--text);
            background: rgba(128, 0, 0, 0.2);
        }

        .nl.active {
            color: var(--copper);
            background: rgba(128, 0, 0, 0.3);
            border: 1px solid var(--border2);
        }

        .nav-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .av {
            width: 32px;
            height: 32px;
            border-radius: 9px;
            background: rgba(128, 0, 0, 0.5);
            border: 1px solid var(--border2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
            color: var(--copper);
            flex-shrink: 0;
        }

        /* HERO - different style: full width text + decorative element */
        .hero-band {
            background: linear-gradient(135deg, #800000 0%, #4a0e0e 55%, #1c0606 100%);
            border-bottom: 1px solid var(--border);
            padding: 52px 36px 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-band::before {
            content: '';
            position: absolute;
            right: 10%;
            top: -30px;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(184, 132, 44, 0.12) 0%, transparent 70%);
        }

        .hero-band::after {
            content: 'AEH';
            position: absolute;
            right: 5%;
            bottom: -20px;
            font-size: 120px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.03);
            letter-spacing: -4px;
            line-height: 1;
        }

        .hero-inner {
            max-width: 1140px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero-eyebrow {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.14em;
            color: var(--copper);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .hero-title {
            font-size: 36px;
            font-weight: 700;
            color: var(--cream);
            letter-spacing: -0.6px;
            line-height: 1.15;
        }

        .hero-title span {
            color: var(--copper);
        }

        .hero-sub {
            font-size: 13.5px;
            color: var(--muted);
            margin-top: 10px;
            max-width: 520px;
            line-height: 1.7;
        }

        .hero-chips {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .chip {
            font-size: 11.5px;
            font-weight: 500;
            color: var(--muted);
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border);
            padding: 6px 14px;
            border-radius: 20px;
        }

        .chip span {
            color: var(--copper);
            font-weight: 600;
        }

        /* BODY */
        .page-body {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 36px 60px;
            margin-top: -44px;
        }

        .contact-layout {
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            gap: 18px;
            align-items: start;
        }

        /* INFO PANEL */
        .info-panel {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-card {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .ic-head {
            padding: 15px 22px;
            border-bottom: 1px solid var(--border);
            background: rgba(128, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .ic-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--copper);
        }

        .ic-head p {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--subtle);
            font-weight: 600;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 22px;
            border-bottom: 1px solid var(--border);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row:hover {
            background: rgba(128, 0, 0, 0.1);
        }

        .info-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(128, 0, 0, 0.3);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-icon svg {
            width: 15px;
            height: 15px;
            color: var(--copper);
        }

        .info-lbl {
            font-size: 10.5px;
            color: var(--subtle);
            margin-bottom: 2px;
        }

        .info-val {
            font-size: 12.5px;
            font-weight: 600;
            color: var(--text);
        }

        /* Quick links */
        .quick-card {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 20px;
        }

        .ql-title {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--subtle);
            font-weight: 600;
            margin-bottom: 14px;
        }

        .ql-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }

        .ql-btn {
            background: rgba(128, 0, 0, 0.25);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px;
            text-align: center;
            text-decoration: none;
            transition: all 0.15s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
        }

        .ql-btn:hover {
            background: rgba(128, 0, 0, 0.4);
            border-color: var(--border2);
        }

        .ql-btn svg {
            width: 16px;
            height: 16px;
            color: var(--copper);
        }

        .ql-btn span {
            font-size: 11px;
            font-weight: 500;
            color: var(--muted);
        }

        /* FORM CARD */
        .form-card {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .fc-head {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border);
            background: rgba(128, 0, 0, 0.15);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .fc-head-left {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .fc-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--copper);
        }

        .fc-title {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--subtle);
            font-weight: 600;
        }

        .fc-badge {
            font-size: 10px;
            color: var(--copper);
            background: rgba(128, 0, 0, 0.3);
            border: 1px solid var(--border2);
            padding: 3px 10px;
            border-radius: 20px;
        }

        .form-body {
            padding: 24px;
        }

        .field {
            margin-bottom: 16px;
        }

        .field:last-of-type {
            margin-bottom: 0;
        }

        label {
            display: block;
            font-size: 10.5px;
            font-weight: 600;
            color: var(--subtle);
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            background: rgba(128, 0, 0, 0.12);
            border: 1px solid rgba(128, 0, 0, 0.35);
            color: var(--text);
            border-radius: 10px;
            padding: 11px 15px;
            font-size: 13px;
            outline: none;
            transition: border-color 0.15s, background 0.15s;
            font-family: 'DM Sans', sans-serif;
            resize: none;
        }

        input::placeholder,
        textarea::placeholder {
            color: var(--subtle);
        }

        input:focus,
        textarea:focus {
            border-color: rgba(184, 132, 44, 0.45);
            background: rgba(128, 0, 0, 0.18);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .btn-send {
            width: 100%;
            background: var(--maroon);
            color: var(--cream);
            border: 1px solid rgba(184, 132, 44, 0.25);
            border-radius: 10px;
            padding: 12px;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.15s;
            font-family: 'DM Sans', sans-serif;
            letter-spacing: 0.03em;
            margin-top: 18px;
        }

        .btn-send:hover {
            background: #960000;
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(128, 0, 0, 0.5);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade {
            animation: fadeUp 0.35s ease both;
        }

        .fade2 {
            animation: fadeUp 0.35s 0.12s ease both;
        }
    </style>
</head>

<body>

    <header>
        <div class="nav-wrap">
            <a href="/" class="logo">AmikomEvent<span>Hub</span></a>
            <div class="nav-links">
                <a href="/" class="nl">Home</a>
                <a href="/profil" class="nl">Profil</a>
                <a href="/katalog" class="nl">Katalog</a>
                <a href="/bantuan" class="nl">Bantuan</a>
                <a href="/kontak" class="nl active">Kontak</a>
            </div>
            <div class="nav-user">
                <div class="av">MH</div>
                <div>
                    <p style="font-size:12px;font-weight:600;color:var(--text);line-height:1.2;">Ratih Intan Dwyatmasari</p>
                    <p style="font-size:10px;color:var(--muted);">24.12.3271</p>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-band fade">
        <div class="hero-inner">
            <p class="hero-eyebrow">Hubungi Kami</p>
            <h1 class="hero-title">Kami siap <span>mendengar</span><br>pertanyaanmu.</h1>
            <p class="hero-sub">Kirim pesan langsung atau hubungi kami melalui kontak yang tersedia. Tim kami akan merespons dalam waktu 1×24 jam kerja.</p>
            <div class="hero-chips">
                <span class="chip">Respon <span>1×24 jam</span></span>
                <span class="chip">Senin – Jumat <span>08.00–16.00</span></span>
                <span class="chip">Email <span>tersedia</span></span>
            </div>
        </div>
    </div>

    <div class="page-body fade2">
        <div class="contact-layout">

            <!-- Info Column -->
            <div class="info-panel">
                <div class="info-card">
                    <div class="ic-head"><span class="ic-dot"></span>
                        <p>Informasi Kontak</p>
                    </div>
                    <div class="info-row">
                        <div class="info-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg></div>
                        <div>
                            <p class="info-lbl">Email</p>
                            <p class="info-val">admin@amikomeventhub.com</p>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg></div>
                        <div>
                            <p class="info-lbl">Telepon</p>
                            <p class="info-val">+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <p class="info-lbl">Jam Operasional</p>
                            <p class="info-val">Senin – Jumat, 08.00 – 16.00 WIB</p>
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg></div>
                        <div>
                            <p class="info-lbl">Alamat</p>
                            <p class="info-val">Ring Road Utara, Sleman, Yogyakarta</p>
                        </div>
                    </div>
                </div>

                <div class="quick-card">
                    <p class="ql-title">Akses Cepat</p>
                    <div class="ql-grid">
                        <a href="/bantuan" class="ql-btn">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Pusat Bantuan</span>
                        </a>
                        <a href="/katalog" class="ql-btn">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                            <span>Katalog Event</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="form-card">
                <div class="fc-head">
                    <div class="fc-head-left"><span class="fc-dot"></span>
                        <p class="fc-title">Kirim Pesan</p>
                    </div>
                    <span class="fc-badge">Respon 1×24 jam</span>
                </div>
                <div class="form-body">
                    <div class="form-row">
                        <div class="field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Nama kamu">
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <input type="email" placeholder="email@kamu.com">
                        </div>
                    </div>
                    <div class="field" style="margin-top:16px;">
                        <label>Subjek</label>
                        <input type="text" placeholder="Topik pertanyaanmu">
                    </div>
                    <div class="field" style="margin-top:16px;">
                        <label>Pesan</label>
                        <textarea rows="6" placeholder="Ceritakan lebih detail tentang pertanyaan atau kebutuhanmu..."></textarea>
                    </div>
                    <button class="btn-send">Kirim Pesan →</button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>