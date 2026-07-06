<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITBSS - Data Mata Kuliah</title>
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
                <h3 class="fw-bold text-dark m-0"><i class="fa-solid fa-book text-primary me-2"></i>Data Mata Kuliah</h3>
                <p class="text-muted small m-0">Portal Akademik Kampus ITBSS</p>
            </div>
            
            <a href="{{route('matakuliah.add')}}"> 
                <input type="button" class="btn btn-primary px-4 fw-bold shadow-sm" value="Create">
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle border">
                <thead class="thead-dark">
                    <tr>
                        <th class="py-3 px-3">No</th>
                        <th class="py-3">Jurusan Id</th>
                        <th class="py-3">Kode Mata Kuliah</th>
                        <th class="py-3">Nama Mata Kuliah</th>
                        <th class="py-3">SKS</th>
                        <th class="py-3">Dosen Id</th>
                        <th class="py-3">Tanggal Dibuat</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matakuliah as $mk)
                    <tr>
                        <td class="fw-bold px-3">{{$mk->id}}</td>
                        <td><span class="badge bg-secondary px-2.5 py-1.5">{{$mk->Jurusan_Id}}</span></td>
                        <td class="fw-bold text-primary">{{$mk->Kode_Matakuliah}}</td>
                        <td>{{$mk->Nama_Matakuliah}}</td>
                        <td><span class="badge bg-info text-dark fw-bold">{{$mk->SKS}} SKS</span></td>
                        <td>{{$mk->Dosen_Id}}</td>
                        <td class="text-muted small">{{$mk->created_at}}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{route('matakuliah.update', $mk->id)}}"> 
                                    <input type="button" class="btn btn-sm btn-warning fw-semibold px-3" value="Edit">
                                </a>
                                
                                <form action="{{route('matakuliah.delete', $mk->id)}}" method="post" class="m-0">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$mk->id}}">
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