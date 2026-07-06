<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrsDetail extends Model
{
    use HasFactory;

    protected $table = 'krs_detail';
    
    protected $fillable = [
        'kode_krs', 
        'kode_kelas', 
        'status'
        ];

    // Relasi balik ke header KRS
    public function krs()
    {
        return $table->hasOne(Krs::class, 'kode_krs', 'id');
    }

    // Relasi ke tabel Kelas yang kita buat di tugas 1
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'kode_kelas', 'id');
    }
}