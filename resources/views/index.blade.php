<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Akademik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Sora:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('atelier/atelier.css') }}">
    <link rel="stylesheet" href="{{ asset('atelier/theme.css') }}">
    <script src="{{ asset('atelier/theme.js') }}"></script>
    <script src="{{ asset('atelier/atelier.js') }}"></script>
</head>
<body>
    <header class="ktm-top at-top">
        <a class="ktm-brand" href="/">KTM<span>Digital</span></a>
        <nav><a href="/mahasiswa">Semua kartu</a><a href="/insert">Terbitkan</a></nav>
    </header>
    <main class="ktm-hero">
        <div>
            <p class="ktm-kick" data-at>Sistem Informasi Akademik</p>
            <h1 data-at-split>Operasi <em>CRUD</em> mahasiswa</h1>
            <p class="ktm-sub" data-at>Universitas Duta Bangsa Surakarta</p>
            <p data-at style="margin-top:26px"><a class="ktm-btn" href="/mahasiswa">Lihat semua kartu</a></p>
        </div>
        <div class="ktm-card ktm-card--demo" data-at aria-hidden="true">
            <div class="ktm-card__top"><i class="ktm-chip"></i><span>Kartu Tanda Mahasiswa</span></div>
            <b>Nama Mahasiswa</b>
            <code>NIM 000000000</code>
        </div>
    </main>
</body>
</html>
