<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'kode_kelas',
        'Kode_Matakuliah',
        'Dosen_Id',
        'hari',
        'jam',
        'tahun_ajaran',
        'ruang_kelas',
        'jumlah_max',
        'jumlah_mahasiswa',
        'semester'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'Dosen_Id', 'id');
    }

    public function mataKuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'Kode_Matakuliah', 'id');
    }
}