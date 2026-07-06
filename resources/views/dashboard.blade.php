<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITBSS - Academic Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-custom { background-color: #1d3557; }
        .navbar-custom .navbar-brand, .navbar-custom .nav-link { color: #f1faee !important; }
        .navbar-custom .nav-link:hover { color: #a8dadc !important; }
        .hero-section { background-color: #457b9d; color: white; padding: 40px 20px; border-radius: 10px; margin-bottom: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .card-custom { border: none; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: transform 0.2s; }
        .card-custom:hover { transform: translateY(-5px); }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top mb-4 shadow">
    <div class="container">
        <a class="navbar-brand fw-bold text-info" href="{{ route('dashboard') }}">
            <i class="fa-solid fa-graduation-cap me-2"></i>ITBSS
        </a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa-solid fa-house me-1"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jurusan"><i class="fa-solid fa-layer-group me-1"></i> Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/matakuliah"><i class="fa-solid fa-book me-1"></i> Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen"><i class="fa-solid fa-user-tie me-1"></i> Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa"><i class="fa-solid fa-users me-1"></i> Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kelas"><i class="fa-solid fa-school me-1"></i> Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/krs"><i class="fa-solid fa-file-signature me-1"></i> KRS</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3 ms-auto text-white fw-semibold">
                <span><i class="fa-solid fa-user-circle text-info me-1"></i> Hi, Admin ITBSS</span>
                <a class="btn btn-sm btn-outline-danger fw-bold" href="/login">
                    <i class="fa-solid fa-right-from-bracket me-1"></i> Log Out
                </a>
            </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="hero-section text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="fw-bold">Selamat Datang di Portal Academic ITBSS</h1>
                    <p class="lead mb-0">Kelola data jurusan, mata kuliah, krs, dan akun akademik kamu dalam satu tempat.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            
            <div class="col-md-4">
                <div class="card card-custom h-100 p-3">
                    <div class="card-body">
                        <div class="text-primary mb-3"><i class="fa-solid fa-address-card fa-2x"></i></div>
                        <h5 class="card-title fw-bold">Rencana Studi (KRS)</h5>
                        <p class="card-text text-muted">Lihat, isi, atau pastikan mata kuliah pilihan kamu sudah disetujui dosen.</p>
                        <a href="{{ route('krs.index') }}" class="btn btn-outline-primary btn-sm">Buka Menu KRS</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom h-100 p-3">
                    <div class="card-body">
                        <div class="text-success mb-3"><i class="fa-solid fa-book-open fa-2x"></i></div>
                        <h5 class="card-title fw-bold">Data Mata Kuliah</h5>
                        <p class="card-text text-muted">Cek daftar modul pembelajaran dan kurikulum yang tersedia saat ini.</p>
                        <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-success btn-sm">Lihat Matkul</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom h-100 p-3">
                    <div class="card-body">
                        <div class="text-warning mb-3"><i class="fa-solid fa-users-gear fa-2x"></i></div>
                        <h5 class="card-title fw-bold">Data Mahasiswa</h5>
                        <p class="card-text text-muted">Akses informasi profil mahasiswa, angkatan, dan kelas aktif.</p>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-warning btn-sm">Buka Mahasiswa</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>