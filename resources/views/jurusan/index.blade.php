<a href="{{route('jurusan.add')}}"> 
    <input type="button" value="Create">
</a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Kode Jurusan</th>
        <th>Nama Jurusan</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>
    @foreach ($jurusan as $j)
    <tr>
        <td>{{$j->id}}</td>
        <td>{{$j->Kode_Jurusan}}</td>
        <td>{{$j->Nama_Jurusan}}</td>
        <td>{{$j->created_at}}</td>
        <td>
            <a href="{{route('jurusan.update', $j->id)}}"> 
                <input type="button" value="Edit">
            </a>
            <form action="{{route('jurusan.delete', $j->id)}}"  method="post">
            @csrf
            <input type="hidden" name="id" value="{{$j->id}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Delete">
        </td>
    </tr>
    @endforeach
</table>