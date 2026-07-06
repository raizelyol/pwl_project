<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $table = 'krs';
    
    protected $fillable = [
        'kode_mahasiswa', 
        'tahun_ajaran', 
        'semester', 
        'status', 
        'total_sks'
        ];

    // Relasi Ke Mahasiswa (Asumsi)
    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'id', 'kode_mahasiswa');
    }

    // Hubungan ke item detail KRS
    public function details()
    {
        return $this->hasMany(KrsDetail::class, 'id', 'kode_krs');
    }
}
