<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITBSS - Login Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1d3557 0%, #457b9d 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background: #ffffff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            padding: 2.5rem;
        }
        .brand-icon {
            font-size: 3rem;
            color: #1d3557;
        }
        .btn-custom {
            background-color: #1d3557;
            color: #ffffff;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            background-color: #457b9d;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .form-control:focus {
            border-color: #457b9d;
            box-shadow: 0 0 0 0.25rem rgba(69, 123, 157, 0.25);
        }
    </style>
</head>
<body>

    <div class="login-card text-center animate__animated animate__fadeIn">
        <div class="mb-4">
            <div class="brand-icon mb-2">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h3 class="fw-bold text-dark">Portal ITBSS</h3>
            <p class="text-muted small">Silakan masuk dengan akun akademik Anda</p>
        </div>

        <form action="#" method="POST">
            <div class="mb-3 text-start">
                <label for="email" class="form-label text-secondary small fw-bold">Alamat Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-light text-secondary"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" placeholder="nama@itbss.ac.id" required>
                </div>
            </div>

            <div class="mb-4 text-start">
                <label for="password" class="form-label text-secondary small fw-bold">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-light text-secondary"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                </div>
            </div>

            <div class="d-grid mb-3">
                <button type="button" onclick="window.location.href='{{ route('dashboard') }}'" class="btn btn-custom btn-lg">
                    <i class="fa-solid fa-right-to-bracket me-2"></i>Masuk Sistem
                </button>
            </div>
        </form>

        <div class="mt-4 pt-3 border-top text-center">
            <a href="{{ route('dashboard') }}" class="text-decoration-none small text-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Beranda
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>