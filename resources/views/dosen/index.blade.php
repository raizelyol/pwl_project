<a href="{{route('dosen.add')}}"> 
    <input type="button" value="Create">
</a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIP</th>
        <th>NIDN</th>
        <th>Pendidikan Terakhir</th>
        <th>Jurusan Id</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($dosen as $d)
    <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->Fullname}}</td>
        <td>{{$d->NIP}}</td>
        <td>{{$d->NIDN}}</td>
        <td>{{$d->Pendidikan_Terakhir}}</td>
        <td>{{$d->Jurusan_Id}}</td>
        <td>{{$d->Tempat_Lahir}}</td>
        <td>{{$d->Tanggal_Lahir}}</td>
        <td>{{$d->Alamat}}</td>
        <td>{{$d->created_at}}</td>
        <td>
            <a href="{{route('dosen.update', $d->id)}}"> 
                <input type="button" value="Edit">
            </a>
            <form action="{{route('dosen.delete', $d->id)}}"  method="post">
            @csrf
            <input type="hidden" name="id" value="{{$d->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Delete">
        </td>
    </tr>
    @endforeach
</table>