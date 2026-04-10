<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog — AmikomEventHub</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --maroon: #800000;
            --brown: #633A2C;
            --copper: #B8842C;
            --gold: #B8860B;
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
            letter-spacing: -0.2px;
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
            right: -60px;
            top: -60px;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(184, 132, 44, 0.1) 0%, transparent 70%);
        }

        .hero-inner {
            max-width: 1140px;
            margin: 0 auto;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
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
            line-height: 1.2;
        }

        .hero-sub {
            font-size: 13.5px;
            color: var(--muted);
            margin-top: 8px;
            max-width: 480px;
            line-height: 1.6;
        }

        .count-pill {
            background: rgba(184, 132, 44, 0.15);
            border: 1px solid rgba(184, 132, 44, 0.3);
            color: var(--copper);
            font-size: 12px;
            font-weight: 600;
            padding: 8px 18px;
            border-radius: 20px;
            white-space: nowrap;
            flex-shrink: 0;
        }

        /* BODY */
        .page-body {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 36px 60px;
            margin-top: -44px;
        }

        /* FILTER ROW */
        .filter-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 22px;
        }

        .filter-btn {
            font-size: 11.5px;
            font-weight: 500;
            color: var(--muted);
            background: var(--surface2);
            border: 1px solid var(--border);
            padding: 6px 14px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.15s;
        }

        .filter-btn.active,
        .filter-btn:hover {
            color: var(--copper);
            border-color: var(--border2);
            background: rgba(128, 0, 0, 0.3);
        }

        /* CARDS */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }

        .event-card {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 0;
            overflow: hidden;
            transition: all 0.2s;
            display: flex;
            flex-direction: column;
        }

        .event-card:hover {
            border-color: rgba(184, 132, 44, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.4);
        }

        /* colored top strip per card */
        .card-strip {
            height: 4px;
        }

        .strip-green {
            background: linear-gradient(90deg, #2d5a30, #4a8a4f);
        }

        .strip-copper {
            background: linear-gradient(90deg, var(--brown), var(--copper));
        }

        .strip-red {
            background: linear-gradient(90deg, #800000, #c04040);
        }

        .strip-gold {
            background: linear-gradient(90deg, var(--gold), #d4a017);
        }

        .card-body {
            padding: 18px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-tags {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
        }

        .tag {
            font-size: 10.5px;
            font-weight: 500;
            color: var(--muted);
            background: rgba(128, 0, 0, 0.25);
            border: 1px solid rgba(128, 0, 0, 0.3);
            padding: 3px 10px;
            border-radius: 6px;
        }

        .badge-free {
            font-size: 10.5px;
            font-weight: 600;
            color: #6dbf70;
            background: rgba(45, 90, 48, 0.25);
            border: 1px solid rgba(74, 138, 79, 0.3);
            padding: 3px 10px;
            border-radius: 6px;
        }

        .badge-paid {
            font-size: 10.5px;
            font-weight: 600;
            color: var(--copper);
            background: rgba(99, 58, 44, 0.3);
            border: 1px solid var(--border2);
            padding: 3px 10px;
            border-radius: 6px;
        }

        .badge-prize {
            font-size: 10.5px;
            font-weight: 600;
            color: #c87e7e;
            background: rgba(128, 0, 0, 0.2);
            border: 1px solid rgba(128, 0, 0, 0.4);
            padding: 3px 10px;
            border-radius: 6px;
        }

        .ev-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 7px;
            line-height: 1.3;
            letter-spacing: -0.01em;
        }

        .ev-desc {
            font-size: 12px;
            color: var(--muted);
            line-height: 1.65;
            flex: 1;
        }

        .ev-meta {
            border-top: 1px solid var(--border);
            margin-top: 14px;
            padding-top: 12px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .meta-row {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 11px;
            color: var(--subtle);
        }

        .meta-row svg {
            width: 11px;
            height: 11px;
            flex-shrink: 0;
            opacity: 0.7;
        }

        .btn-daftar {
            margin-top: 14px;
            width: 100%;
            background: var(--maroon);
            color: var(--cream);
            font-size: 12px;
            font-weight: 600;
            padding: 10px;
            border-radius: 9px;
            border: 1px solid rgba(184, 132, 44, 0.2);
            cursor: pointer;
            transition: all 0.15s;
            font-family: 'DM Sans', sans-serif;
            letter-spacing: 0.02em;
        }

        .btn-daftar:hover {
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
                <a href="/katalog" class="nl active">Katalog</a>
                <a href="/bantuan" class="nl">Bantuan</a>
                <a href="/kontak" class="nl">Kontak</a>
            </div>
            <div class="nav-user">
                <div class="av">MH</div>
                <div>
                    <p style="font-size:12px;font-weight:600;color:var(--text);line-height:1.2;">Mahasiswa</p>
                    <p style="font-size:10px;color:var(--muted);">XX.XX.XXXX</p>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-band fade">
        <div class="hero-inner">
            <div>
                <p class="hero-eyebrow">Jelajahi Event</p>
                <h1 class="hero-title">Katalog Event</h1>
                <p class="hero-sub">Temukan seminar, workshop, kompetisi, dan bootcamp terbaik dari Universitas AMIKOM Yogyakarta.</p>
            </div>
            <span class="count-pill">4 event aktif</span>
        </div>
    </div>

    <div class="page-body fade2">

        <div class="filter-row">
            <button class="filter-btn active">Semua</button>
            <button class="filter-btn">Seminar</button>
            <button class="filter-btn">Workshop</button>
            <button class="filter-btn">Kompetisi</button>
            <button class="filter-btn">Bootcamp</button>
            <button class="filter-btn">Gratis</button>
        </div>

        <div class="cards-grid">

            <div class="event-card">
                <div class="card-strip strip-green"></div>
                <div class="card-body">
                    <div class="card-tags"><span class="tag">Seminar</span><span class="badge-free">Gratis</span></div>
                    <p class="ev-title">Seminar Teknologi AI</p>
                    <p class="ev-desc">Perkembangan kecerdasan buatan di era digital bisnis dan dampaknya terhadap industri masa kini.</p>
                    <div class="ev-meta">
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>20 Juli 2026</div>
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>Auditorium AMIKOM</div>
                    </div>
                    <button class="btn-daftar">Daftar Sekarang</button>
                </div>
            </div>

            <div class="event-card">
                <div class="card-strip strip-copper"></div>
                <div class="card-body">
                    <div class="card-tags"><span class="tag">Workshop</span><span class="badge-paid">Rp 50.000</span></div>
                    <p class="ev-title">Workshop Laravel</p>
                    <p class="ev-desc">Membangun aplikasi web modern dengan Laravel dan Tailwind CSS dalam sesi intensif bersama praktisi.</p>
                    <div class="ev-meta">
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>5 Agustus 2026</div>
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>Lab Komputer Lt. 3</div>
                    </div>
                    <button class="btn-daftar">Daftar Sekarang</button>
                </div>
            </div>

            <div class="event-card">
                <div class="card-strip strip-red"></div>
                <div class="card-body">
                    <div class="card-tags"><span class="tag">Kompetisi</span><span class="badge-prize">Hadiah 5 Juta</span></div>
                    <p class="ev-title">Kompetisi UI/UX Design</p>
                    <p class="ev-desc">Lomba desain antarmuka bertema smart city, terbuka untuk mahasiswa aktif seluruh perguruan tinggi.</p>
                    <div class="ev-meta">
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>12 September 2026</div>
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>Online</div>
                    </div>
                    <button class="btn-daftar">Daftar Sekarang</button>
                </div>
            </div>

            <div class="event-card">
                <div class="card-strip strip-gold"></div>
                <div class="card-body">
                    <div class="card-tags"><span class="tag">Bootcamp</span><span class="badge-paid">Rp 150.000</span></div>
                    <p class="ev-title">Bootcamp Digital Marketing</p>
                    <p class="ev-desc">Pelajari SEO, strategi media sosial, dan iklan digital selama 3 hari bersama mentor berpengalaman.</p>
                    <div class="ev-meta">
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>1 Oktober 2026</div>
                        <div class="meta-row"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>Gedung B AMIKOM</div>
                    </div>
                    <button class="btn-daftar">Daftar Sekarang</button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>