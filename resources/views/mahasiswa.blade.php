<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartu Mahasiswa</title>
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
    <main class="ktm-main">
        <div class="ktm-head">
            <div>
                <p class="ktm-kick" data-at>Universitas Duta Bangsa Surakarta</p>
                <h1 data-at-split>Kartu <em>mahasiswa</em></h1>
            </div>
            <a class="ktm-btn" href="/insert" data-at>Terbitkan kartu</a>
        </div>

        @if($message = Session::get('message'))
            <p class="ktm-msg" role="status">{{ $message }}</p>
        @endif

        <section class="ktm-grid" data-at-stagger>
            @forelse ($mahasiswas as $mahasiswa)
            <article class="ktm-card">
                <div class="ktm-card__top"><i class="ktm-chip"></i><span>{{ $mahasiswa->kelas }}</span></div>
                <b>{{ $mahasiswa->nama }}</b>
                <code>NIM {{ $mahasiswa->nim }}</code>
                <dl>
                    <div><dt>Alamat</dt><dd>{{ $mahasiswa->alamat }}</dd></div>
                    <div><dt>No HP</dt><dd>{{ $mahasiswa->hp }}</dd></div>
                </dl>
                <footer>
                    <a href="/mahasiswa/update/{{ $mahasiswa->nim }}">Ubah</a>
                    <a href="/mahasiswa/delete/{{ $mahasiswa->nim }}" onclick="return confirm('Yakin menghapus kartu ini?')">Hapus</a>
                </footer>
            </article>
            @empty
            <p class="ktm-empty">Belum ada kartu yang diterbitkan.</p>
            @endforelse
        </section>
    </main>
</body>
</html>
