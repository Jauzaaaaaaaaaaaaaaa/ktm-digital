<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terbitkan kartu</title>
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
    <main class="ktm-main ktm-narrow">
        <p class="ktm-kick" data-at><a href="/mahasiswa">Kembali ke semua kartu</a></p>
        <h1 data-at-split>Terbitkan <em>kartu</em></h1>
        <form method="post" class="ktm-form" data-at>
            {{ csrf_field() }}
            <div class="ktm-field"><label for="nim">NIM</label><input type="text" name="nim" id="nim" required></div>
            <div class="ktm-field"><label for="nama">Nama</label><input type="text" name="nama" id="nama" required></div>
            <div class="ktm-field"><label for="alamat">Alamat</label><input type="text" name="alamat" id="alamat" required></div>
            <div class="ktm-field"><label for="kelas">Kelas</label><input type="text" name="kelas" id="kelas" required></div>
            <div class="ktm-field"><label for="hp">No HP</label><input type="text" name="hp" id="hp" required></div>
            <button type="submit" class="ktm-btn">Simpan data</button>
        </form>
    </main>
</body>
</html>
