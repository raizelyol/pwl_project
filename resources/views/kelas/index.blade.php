<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITBSS - Manajemen Kelas</title>
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
                <h3 class="fw-bold text-dark m-0"><i class="fa-solid fa-school text-primary me-2"></i>Data Kelas Perkuliahan</h3>
                <p class="text-muted small m-0">Portal Akademik Kampus ITBSS</p>
            </div>
            
            <a href="{{route('kelas.add')}}"> 
                <input type="button" class="btn btn-primary px-4 fw-bold shadow-sm" value="Create">
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle border">
                <thead class="thead-dark">
                    <tr>
                        <th class="py-3 px-3">ID</th>
                        <th class="py-3">Kode Kelas</th>
                        <th class="py-3">Kode Mata Kuliah</th>
                        <th class="py-3">Kode Dosen</th>
                        <th class="py-3">Hari</th>
                        <th class="py-3">Jam</th>
                        <th class="py-3">Tahun Ajaran</th>
                        <th class="py-3">Ruang Kelas</th>
                        <th class="py-3">Jumlah Max</th>
                        <th class="py-3">Jumlah Mahasiswa</th>
                        <th class="py-3">Semester</th>
                        <th class="py-3">Tanggal Dibuat</th>
                        <th class="py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semua_kelas as $k)
                    <tr>
                        <td class="fw-bold px-3 text-secondary">{{$k->id}}</td>
                        <td><span class="badge bg-primary px-2 py-1.5 fw-bold">{{$k->kode_kelas}}</span></td>
                        <td class="fw-semibold text-primary">{{$k->Kode_Matakuliah}}</td>
                        <td>{{$k->Dosen_Id}}</td>
                        <td><span class="text-capitalize fw-semibold">{{$k->hari}}</span></td>
                        <td><i class="fa-regular fa-clock text-muted me-1"></i>{{$k->jam}}</td>
                        <td><span class="badge bg-secondary px-2 py-1">{{$k->tahun_ajaran}}</span></td>
                        <td><i class="fa-solid fa-location-dot text-danger me-1"></i>{{$k->ruang_kelas}}</td>
                        <td>{{$k->jumlah_max}}</td>
                        <td><span class="fw-bold text-success">{{$k->jumlah_mahasiswa}}</span></td>
                        <td>Semester {{$k->semester}}</td>
                        <td class="text-muted small">{{$k->created_at}}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">
                                <a href="{{route('kelas.update', $k->id)}}"> 
                                    <input type="button" class="btn btn-sm btn-warning fw-semibold px-3" value="Edit">
                                </a>
                                
                                <form action="{{route('kelas.delete', $k->id)}}" method="post" class="m-0">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>