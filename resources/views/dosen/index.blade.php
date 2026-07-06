<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITBSS - Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; padding: 30px 0; }
        .main-card { background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); padding: 30px; }
        .thead-dark { background-color: #1d3557; color: white; }
    </style>
</head>
<body>

<div class="container-fluid px-4">
    <div class="main-card">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold text-dark m-0"><i class="fa-solid fa-user-tie text-primary me-2"></i>Data Dosen Pengajar</h3>
                <p class="text-muted small m-0">Portal Akademik Kampus ITBSS</p>
            </div>
            
            <a href="{{route('dosen.add')}}"> 
                <input type="button" class="btn btn-primary px-4 fw-bold shadow-sm" value="Create">
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle border">
                <thead class="thead-dark">
                    <tr>
                        <th class="py-3 px-3">No</th>
                        <th class="py-3">Nama Lengkap</th>
                        <th class="py-3">NIP</th>
                        <th class="py-3">NIDN</th>
                        <th class="py-3">Pendidikan Terakhir</th>
                        <th class="py-3">Jurusan Id</th>
                        <th class="py-3">Tempat Lahir</th>
                        <th class="py-3">Tanggal Lahir</th>
                        <th class="py-3">Alamat</th>
                        <th class="py-3">Tanggal Dibuat</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $d)
                    <tr>
                        <td class="fw-bold px-3 text-secondary">{{$d->id}}</td>
                        <td class="fw-semibold text-dark">{{$d->Fullname}}</td>
                        <td class="fw-bold text-primary">{{$d->NIP}}</td>
                        <td>{{$d->NIDN}}</td>
                        <td><span class="badge bg-info text-dark fw-bold">{{$d->Pendidikan_Terakhir}}</span></td>
                        <td><span class="badge bg-secondary px-2 py-1">{{$d->Jurusan_Id}}</span></td>
                        <td>{{$d->Tempat_Lahir}}</td>
                        <td>{{$d->Tanggal_Lahir}}</td>
                        <td>{{$d->Alamat}}</td>
                        <td class="text-muted small">{{$d->created_at}}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{route('dosen.update', $d->id)}}"> 
                                    <input type="button" class="btn btn-sm btn-warning fw-semibold px-3" value="Edit">
                                </a>
                                
                                <form action="{{route('dosen.delete', $d->id)}}" method="post" class="m-0">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$d->id}}">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>