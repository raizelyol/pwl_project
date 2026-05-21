<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'matakuliah';

    protected $fillable = [
        'Jurusan_Id',
        'Kode_Matakuliah',
        'Nama_Matakuliah',
        'SKS',
        'Dosen_Id',
    ];

}