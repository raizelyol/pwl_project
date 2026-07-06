<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITBSS - Kartu Rencana Studi (KRS)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; padding: 30px 0; }
        .main-card { background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); padding: 30px; }
        .thead-dark { background-color: #1d3557; color: white; }
    </style>
</head>
<body>

<div class="container">
    <div class="main-card">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold text-dark m-0"><i class="fa-solid fa-file-signature text-primary me-2"></i>Data KRS Mahasiswa</h3>
                <p class="text-muted small m-0">Portal Akademik Kampus ITBSS</p>
            </div>
            
            <span class="badge bg-primary px-3 py-2 fw-semibold">Tahun Akademik Aktif</span>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle border">
                <thead class="thead-dark">
                    <tr>
                        <th class="py-3 px-3">No</th>
                        <th class="py-3">NIM</th>
                        <th class="py-3">Nama Mahasiswa</th>
                        <th class="py-3">Tahun Ajaran</th>
                        <th class="py-3">Semester</th>
                        <th class="py-3">Total SKS</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($krs as $k)
                    <tr>
                        <td class="fw-bold px-3">{{$k->id}}</td>
                        <td class="fw-bold text-primary">{{$k->mahasiswa->NIM}}</td>
                        <td class="fw-semibold text-dark">{{$k->mahasiswa->Fullname}}</td>
                        <td><span class="badge bg-secondary px-2 py-1">{{$k->tahun_ajaran}}</span></td>
                        <td>Semester {{$k->semester}}</td>
                        <td><span class="badge bg-info text-dark fw-bold">{{$k->total_sks}} SKS</span></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{ action([App\Http\Controllers\KRSController::class, 'show'], $k->id)}}" target="_blank">
                                    <input type="button" class="btn btn-sm btn-success fw-semibold px-3" value="View">
                                </a>
                                
                                <form action="{{ action([App\Http\Controllers\KRSController::class, 'destroy'], $k->id)}}" method="post" class="m-0">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$k->id}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-sm btn-danger fw-semibold px-3" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

<div>
    <h3 class="fw-bold text-dark m-0">...</h3>
    <p class="text-muted small m-0">Portal Academic Kampus ITBSS</p>
    
    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-outline-secondary mt-2">
        <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Dashboard
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>