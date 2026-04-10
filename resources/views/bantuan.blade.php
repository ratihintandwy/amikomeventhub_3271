<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan — AmikomEventHub</title>
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

        /* HERO */
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
            left: -40px;
            bottom: -60px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(184, 132, 44, 0.08) 0%, transparent 70%);
        }

        .hero-inner {
            max-width: 1140px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 40px;
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
            font-size: 32px;
            font-weight: 700;
            color: var(--cream);
            letter-spacing: -0.5px;
        }

        .hero-sub {
            font-size: 13.5px;
            color: var(--muted);
            margin-top: 8px;
            line-height: 1.6;
        }

        .hero-stat {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex-shrink: 0;
        }

        .hs-item {
            background: rgba(184, 132, 44, 0.1);
            border: 1px solid rgba(184, 132, 44, 0.2);
            border-radius: 12px;
            padding: 14px 20px;
            text-align: center;
        }

        .hs-val {
            font-size: 20px;
            font-weight: 700;
            color: var(--copper);
        }

        .hs-lab {
            font-size: 10px;
            color: var(--subtle);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 2px;
        }

        /* BODY */
        .page-body {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 36px 60px;
            margin-top: -44px;
        }

        .faq-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 20px;
            align-items: start;
        }

        /* LEFT PANEL */
        .topics-panel {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .tp-head {
            padding: 16px 20px;
            border-bottom: 1px solid var(--border);
            background: rgba(128, 0, 0, 0.15);
        }

        .tp-head p {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--subtle);
            font-weight: 600;
        }

        .topic-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 20px;
            border-bottom: 1px solid var(--border);
            cursor: pointer;
            transition: background 0.15s;
        }

        .topic-item:last-child {
            border-bottom: none;
        }

        .topic-item:hover {
            background: rgba(128, 0, 0, 0.15);
        }

        .topic-item.active {
            background: rgba(128, 0, 0, 0.25);
        }

        .topic-icon {
            width: 32px;
            height: 32px;
            border-radius: 9px;
            background: rgba(128, 0, 0, 0.3);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .topic-icon svg {
            width: 14px;
            height: 14px;
            color: var(--copper);
        }

        .topic-title {
            font-size: 12.5px;
            font-weight: 600;
            color: var(--text);
        }

        .topic-sub {
            font-size: 10.5px;
            color: var(--muted);
            margin-top: 1px;
        }

        /* FAQ LIST */
        .faq-col {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        details {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            transition: border-color 0.2s;
        }

        details[open] {
            border-color: rgba(184, 132, 44, 0.28);
            background: var(--surface3);
        }

        summary {
            list-style: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 17px 22px;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        .sum-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .q-num {
            width: 26px;
            height: 26px;
            border-radius: 8px;
            background: rgba(128, 0, 0, 0.35);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
            color: var(--copper);
            flex-shrink: 0;
        }

        .sum-text {
            font-size: 13.5px;
            font-weight: 600;
            color: var(--text);
        }

        details[open] .sum-text {
            color: var(--copper);
        }

        .chevron {
            width: 14px;
            height: 14px;
            color: var(--subtle);
            transition: transform 0.2s;
            flex-shrink: 0;
        }

        details[open] .chevron {
            transform: rotate(180deg);
            color: var(--copper);
        }

        .answer {
            padding: 0 22px 18px;
            border-top: 1px solid var(--border);
        }

        .answer p {
            font-size: 12.5px;
            color: var(--muted);
            line-height: 1.75;
            padding-top: 14px;
        }

        /* CTA */
        .cta-bar {
            margin-top: 16px;
            background: linear-gradient(135deg, rgba(128, 0, 0, 0.4), rgba(99, 58, 44, 0.3));
            border: 1px solid rgba(184, 132, 44, 0.22);
            border-radius: 14px;
            padding: 22px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .cta-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--text);
        }

        .cta-sub {
            font-size: 12px;
            color: var(--muted);
            margin-top: 3px;
        }

        .btn-cta {
            font-size: 12.5px;
            font-weight: 600;
            color: var(--cream);
            background: var(--maroon);
            border: 1px solid rgba(184, 132, 44, 0.25);
            padding: 10px 22px;
            border-radius: 10px;
            text-decoration: none;
            white-space: nowrap;
            transition: all 0.15s;
        }

        .btn-cta:hover {
            background: #960000;
            transform: translateY(-1px);
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
                <a href="/bantuan" class="nl active">Bantuan</a>
                <a href="/kontak" class="nl">Kontak</a>
            </div>
            <div class="nav-user">
                <div class="av">RID</div>
                <div>
                    <p style="font-size:12px;font-weight:600;color:var(--text);line-height:1.2;">Ratih Intan Dwyatmasari</p>
                    <p style="font-size:10px;color:var(--muted);">24.12.3271</p>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-band fade">
        <div class="hero-inner">
            <div>
                <p class="hero-eyebrow">Pusat Bantuan</p>
                <h1 class="hero-title">Ada yang bisa kami bantu?</h1>
                <p class="hero-sub">Temukan jawaban atas pertanyaanmu seputar pendaftaran event, sertifikat, dan layanan AmikomEventHub.</p>
            </div>
            <div class="hero-stat">
                <div class="hs-item">
                    <p class="hs-val">5</p>
                    <p class="hs-lab">Topik FAQ</p>
                </div>
                <div class="hs-item">
                    <p class="hs-val" style="font-size:14px;">08–16</p>
                    <p class="hs-lab">Jam Layanan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body fade2">
        <div class="faq-layout">

            <!-- Topik Panel -->
            <div class="topics-panel">
                <div class="tp-head">
                    <p>Topik Bantuan</p>
                </div>
                <div class="topic-item active">
                    <div class="topic-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></div>
                    <div>
                        <p class="topic-title">Tentang Platform</p>
                        <p class="topic-sub">Informasi umum</p>
                    </div>
                </div>
                <div class="topic-item">
                    <div class="topic-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg></div>
                    <div>
                        <p class="topic-title">Pendaftaran</p>
                        <p class="topic-sub">Cara daftar event</p>
                    </div>
                </div>
                <div class="topic-item">
                    <div class="topic-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></div>
                    <div>
                        <p class="topic-title">Pembayaran</p>
                        <p class="topic-sub">Harga & biaya event</p>
                    </div>
                </div>
                <div class="topic-item">
                    <div class="topic-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></div>
                    <div>
                        <p class="topic-title">Sertifikat</p>
                        <p class="topic-sub">Cara mendapat sertifikat</p>
                    </div>
                </div>
                <div class="topic-item">
                    <div class="topic-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg></div>
                    <div>
                        <p class="topic-title">Pembatalan</p>
                        <p class="topic-sub">Kebijakan pembatalan</p>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div>
                <div class="faq-col">
                    <details open>
                        <summary>
                            <div class="sum-left"><span class="q-num">1</span><span class="sum-text">Apa itu AmikomEventHub?</span></div>
                            <svg class="chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="answer">
                            <p>Platform digital untuk mengelola, mendaftarkan, dan memantau event di lingkungan Universitas AMIKOM Yogyakarta — mulai dari seminar, workshop, hingga kompetisi.</p>
                        </div>
                    </details>

                    <details>
                        <summary>
                            <div class="sum-left"><span class="q-num">2</span><span class="sum-text">Bagaimana cara mendaftar event?</span></div>
                            <svg class="chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="answer">
                            <p>Buka halaman Katalog, pilih event yang diminati, klik "Daftar Sekarang", dan isi form dengan data diri. Konfirmasi akan dikirim ke email kamu.</p>
                        </div>
                    </details>

                    <details>
                        <summary>
                            <div class="sum-left"><span class="q-num">3</span><span class="sum-text">Apakah semua event berbayar?</span></div>
                            <svg class="chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="answer">
                            <p>Tidak. Banyak event tersedia gratis untuk mahasiswa aktif AMIKOM. Informasi harga tercantum jelas pada setiap event di halaman Katalog.</p>
                        </div>
                    </details>

                    <details>
                        <summary>
                            <div class="sum-left"><span class="q-num">4</span><span class="sum-text">Bagaimana cara mendapatkan sertifikat?</span></div>
                            <svg class="chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="answer">
                            <p>Sertifikat digital dikirim ke email maksimal 7 hari setelah event selesai. Pastikan kamu melakukan absensi saat hari pelaksanaan.</p>
                        </div>
                    </details>

                    <details>
                        <summary>
                            <div class="sum-left"><span class="q-num">5</span><span class="sum-text">Bisakah membatalkan pendaftaran?</span></div>
                            <svg class="chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="answer">
                            <p>Pembatalan dapat dilakukan maksimal H-3 sebelum event dimulai melalui halaman Kontak dengan menyertakan nama, NIM, dan nama event.</p>
                        </div>
                    </details>
                </div>

                <div class="cta-bar">
                    <div>
                        <p class="cta-title">Masih ada pertanyaan?</p>
                        <p class="cta-sub">Tim kami siap membantu — Senin hingga Jumat, pukul 08.00 – 16.00 WIB.</p>
                    </div>
                    <a href="/kontak" class="btn-cta">Hubungi Kami →</a>
                </div>
            </div>

        </div>
    </div>

</body>

</html>