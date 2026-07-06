<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // 1. Halaman Index
    public function index()
    {
        // Menggunakan eager loading (with) agar tidak query berulang kali di blade
        $semua_kelas = Kelas::with(['dosen', 'mataKuliah'])->get();
        return view('kelas.index', compact('semua_kelas'));
    }

    // 2. Halaman Form Create
    public function create()
    {
        // Mengambil data untuk dropdown
        $daftar_dosen = dosen::all();
        $daftar_matkul = matakuliah::all();
        
        $daftar_hari = ['senin', 'selasa', 'rabu', 'kamis', 'jumat'];
        $daftar_jam = ['08:00 - 09:40', '09:50 - 11:30', '12:30 - 14:10', '17:00 - 18:40', '19:00 - 20:40'];

        return view('kelas.create', compact('daftar_dosen', 'daftar_matkul', 'daftar_hari', 'daftar_jam'));
    }

    // 3. Proses Simpan Data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_kelas' => 'required|string',
            'Kode_Matakuliah' => 'required',
            'Dosen_Id' => 'required',
            'hari' => 'required|in:senin,selasa,rabu,kamis,jumat',
            'jam' => 'required|in:08:00 - 09:40,09:50 - 11:30,12:30 - 14:10,17:00 - 18:40,19:00 - 20:40',
            'tahun_ajaran' => 'required|string',
            'ruang_kelas' => 'required|string',
            'jumlah_max' => 'required|integer|min:1',
            'semester' => 'required|in:ganjil,genap',
        ]);

        try {
            Kelas::create($validated);
            return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal! Jadwal dosen atau ruangan bentrok.');
        }
    }

    // 4. Proses Hapus Data
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}