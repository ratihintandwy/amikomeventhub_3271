<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil — AmikomEventHub</title>
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

        /* ─── HEADER ─── */
        header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(12px);
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

        /* ─── HERO BAND ─── */
        .hero-band {
            background: linear-gradient(135deg, #800000 0%, #4a0e0e 60%, #2a0808 100%);
            border-bottom: 1px solid var(--border);
            padding: 52px 36px 72px;
            position: relative;
            overflow: hidden;
        }

        .hero-band::before {
            content: '';
            position: absolute;
            right: -80px;
            top: -80px;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(184, 132, 44, 0.12) 0%, transparent 70%);
        }

        .hero-band::after {
            content: '';
            position: absolute;
            left: 60%;
            bottom: -40px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(128, 0, 0, 0.4) 0%, transparent 70%);
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
            line-height: 1.2;
        }

        .hero-sub {
            font-size: 13.5px;
            color: var(--muted);
            margin-top: 8px;
            line-height: 1.6;
        }

        .hero-badge {
            background: rgba(184, 132, 44, 0.15);
            border: 1px solid rgba(184, 132, 44, 0.3);
            border-radius: 12px;
            padding: 16px 22px;
            text-align: center;
            flex-shrink: 0;
        }

        .hero-badge .hb-val {
            font-size: 22px;
            font-weight: 700;
            color: var(--copper);
        }

        .hero-badge .hb-lab {
            font-size: 10px;
            color: var(--subtle);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 2px;
        }

        /* ─── CONTENT ─── */
        .page-body {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 36px 60px;
            margin-top: -36px;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 18px;
            align-items: start;
        }

        .card {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .card-head {
            padding: 15px 22px;
            border-bottom: 1px solid var(--border);
            background: rgba(128, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .card-head-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--copper);
        }

        .card-head p {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--subtle);
            font-weight: 600;
        }

        /* avatar card */
        .av-card {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 32px 22px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .av-lg {
            width: 72px;
            height: 72px;
            border-radius: 18px;
            background: linear-gradient(135deg, #800000, #4a0e0e);
            border: 2px solid rgba(184, 132, 44, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: 700;
            color: var(--copper);
            margin-bottom: 16px;
            box-shadow: 0 8px 24px rgba(128, 0, 0, 0.4);
        }

        .av-name {
            font-size: 15px;
            font-weight: 700;
            color: var(--text);
        }

        .av-nim {
            font-size: 12px;
            color: var(--muted);
            font-family: 'DM Mono', monospace;
            margin-top: 4px;
            letter-spacing: 0.05em;
        }

        .av-divider {
            width: 100%;
            height: 1px;
            background: var(--border);
            margin: 18px 0;
        }

        .badge-aktif {
            font-size: 10.5px;
            font-weight: 600;
            color: var(--copper);
            background: rgba(128, 0, 0, 0.3);
            border: 1px solid rgba(184, 132, 44, 0.25);
            padding: 5px 16px;
            border-radius: 20px;
            letter-spacing: 0.04em;
        }

        .av-info-mini {
            width: 100%;
            margin-top: 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .avm-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .avm-k {
            font-size: 10.5px;
            color: var(--subtle);
        }

        .avm-v {
            font-size: 11px;
            font-weight: 600;
            color: var(--muted);
        }

        /* detail rows */
        .d-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 22px;
            border-bottom: 1px solid var(--border);
        }

        .d-row:last-child {
            border-bottom: none;
        }

        .d-row:hover {
            background: rgba(128, 0, 0, 0.08);
        }

        .d-key {
            font-size: 12px;
            color: var(--muted);
        }

        .d-val {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
        }

        .d-val.mono {
            font-family: 'DM Mono', monospace;
            font-size: 12px;
            color: var(--copper);
        }

        /* stats bar */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 18px;
        }

        .stat-box {
            background: var(--surface2);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 18px 16px;
            text-align: center;
        }

        .stat-box .sv {
            font-size: 22px;
            font-weight: 700;
            color: var(--copper);
        }

        .stat-box .sl {
            font-size: 10px;
            color: var(--subtle);
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-top: 4px;
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
            animation: fadeUp 0.35s 0.1s ease both;
        }
    </style>
</head>

<body>

    <header>
        <div class="nav-wrap">
            <a href="/" class="logo">AmikomEvent<span>Hub</span></a>
            <div class="nav-links">
                <a href="/" class="nl">Home</a>
                <a href="/profil" class="nl active">Profil</a>
                <a href="/katalog" class="nl">Katalog</a>
                <a href="/bantuan" class="nl">Bantuan</a>
                <a href="/kontak" class="nl">Kontak</a>
            </div>
            <div class="nav-user">
                <div class="av">MH</div>
                <div>
                    <p style="font-size:12px;font-weight:600;color:var(--text);line-height:1.2;">Mahasiswa</p>
                    <p style="font-size:10px;color:var(--muted);">24.12.3271</p>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-band fade">
        <div class="hero-inner">
            <div>
                <p class="hero-eyebrow">Akun Mahasiswa</p>
                <h1 class="hero-title">Profil Mahasiswa</h1>
                <p class="hero-sub">Kelola informasi akademik dan pantau aktivitas event kamu di satu tempat.</p>
            </div>
            <div class="hero-badge">
                <p class="hb-val">2025</p>
                <p class="hb-lab">Tahun Aktif</p>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="stats-row fade2">
            <div class="stat-box">
                <p class="sv">0</p>
                <p class="sl">Event Diikuti</p>
            </div>
            <div class="stat-box">
                <p class="sv">0</p>
                <p class="sl">Sertifikat</p>
            </div>
            <div class="stat-box">
                <p class="sv" style="font-size:16px;color:var(--copper);">Aktif</p>
                <p class="sl">Status</p>
            </div>
        </div>

        <div class="profile-grid fade2" style="animation-delay:0.15s;">
            <div class="av-card">
                <div class="av-lg">MH</div>
                <p class="av-name">Ratih Intan Dwyatmasari</p>
                <p class="av-nim">24.12.3271</p>
                <div class="av-divider"></div>
                <span class="badge-aktif">● Aktif</span>
                <div class="av-info-mini">
                    <div class="avm-row"><span class="avm-k">Prodi</span><span class="avm-v">S1 Sist. Informasi</span></div>
                    <div class="avm-row"><span class="avm-k">Matkul</span><span class="avm-v">Digital Bisnis</span></div>
                    <div class="avm-row"><span class="avm-k">TA</span><span class="avm-v">2025 / 2026</span></div>
                </div>
            </div>

            <div class="card">
                <div class="card-head"><span class="card-head-dot"></span>
                    <p>Informasi Akademik</p>
                </div>
                <div class="d-row"><span class="d-key">Nama Lengkap</span><span class="d-val">Ratih Intan Dwyatmasari</span></div>
                <div class="d-row"><span class="d-key">NIM</span><span class="d-val mono">24.12.3271</span></div>
                <div class="d-row"><span class="d-key">Program Studi</span><span class="d-val">S1 Sistem Informasi</span></div>
                <div class="d-row"><span class="d-key">Mata Kuliah</span><span class="d-val">Digital Bisnis <span style="color:var(--subtle);font-size:11px;font-weight:400;">SI148</span></span></div>
                <div class="d-row"><span class="d-key">Institusi</span><span class="d-val">Universitas AMIKOM Yogyakarta</span></div>
                <div class="d-row"><span class="d-key">Tahun Akademik</span><span class="d-val">2025 / 2026</span></div>
            </div>
        </div>
    </div>

</body>

</html>