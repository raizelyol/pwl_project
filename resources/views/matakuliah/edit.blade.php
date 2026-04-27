{{$matakuliah}}
<form action="{{route('matakuliah.edit', $matakuliah->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$matakuliah->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
    <tr>
        <td> Jurusan Id </td>
        <td>:</td>
        <td><input type="text" name="Jurusan_Id" value="{{$matakuliah->Jurusan_Id}}"></td>
    </tr>
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="Kode_Matakuliah" value="{{$matakuliah->Kode_Matakuliah}}"></td>
    </tr>
    <tr>
        <td>Nama Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="Nama_Matakuliah" value="{{$matakuliah->Nama_Matakuliah}}"></td>
    </tr>
    <tr>
        <td>SKS</td>
        <td>:</td>
        <td><input type="text" name="SKS" value="{{$matakuliah->SKS}}"></td>
    </tr>
    <tr>
        <td>Dosen Id</td>
        <td>:</td>
        <td><input type="text" name="Dosen_Id" value="{{$matakuliah->Dosen_Id}}"></td>   
    </tr>
    <tr>
        <td colspan="3">
            <input type="submit" value="Update">
            <input type="reset" value="Clear">
        </td>
    </tr>
    </table>
</form>