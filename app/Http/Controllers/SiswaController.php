<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $jurusan = Jurusan::all();
        return view('siswa.create',compact('jurusan',));
    }

    public function store(Request $request)
{
    // Validasi request
    $validatedData = $request->validate([
        'nama' => 'required:siswa,nama', // Mengasumsikan nama tabel adalah 'siswas' dan kolomnya adalah 'nama'
        'nis' => 'required|unique:siswa,nis', // Sama, untuk tabel 'siswa' dan kolom 'nis'
        'jurusan_id' => 'required',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan'
    ],[
        'nama.required' => 'Nama siswa harus diisi.',
        'nis.required' => 'NIS harus diisi.',
        'nis.unique' => 'NIS sudah ada.',
        'jurusan_id.required' => 'Silahkan pilih jurusan.',
        'jenis_kelamin.required' => 'Silahkan pilih jenis kelamin.'
    ]);

    // Membuat objek Siswa baru dan menyimpannya
    $siswa = new Siswa;
    $siswa->nama = $request->nama;
    $siswa->nis = $request->nis;
    $siswa->jurusan_id = $request->jurusan_id;
    $siswa->jenis_kelamin = $request->jenis_kelamin;
    $siswa->save();

    return redirect()->route('siswa.index')->with('success','Data berhasil ditambah');
}

    public function show(Siswa $siswa)
    {
        //
    }

    public function edit(Siswa $siswa)
    {
        $jurusan = Jurusan::all();
        return view('siswa.edit',compact('siswa','jurusan'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        // Validasi request
    $validatedData = $request->validate([
        'nama' => 'required:siswa,nama', // Mengasumsikan nama tabel adalah 'siswas' dan kolomnya adalah 'nama'
        'nis' => 'required|unique:siswa,nis', // Sama, untuk tabel 'siswa' dan kolom 'nis'
        'jurusan_id' => 'required',
        'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan'
    ],[
        'nama.required' => 'Nama siswa harus diisi.',
        'nis.required' => 'NIS harus diisi.',
        'nis.unique' => 'NIS sudah ada.',
        'jurusan_id.required' => 'Silahkan pilih jurusan.',
        'jenis_kelamin.required' => 'Silahkan pilih jenis kelamin.'
    ]);

        
        // Update data siswa
    $siswa->update([
        'nama' => $request->nama,
        'nis' => $request->nis,
        'jurusan_id' => $request->jurusan_id,
        'jenis_kelamin' => $request->jenis_kelamin,
    ]);

    return redirect()->route('siswa.index')->with('success','Data siswa berhasil diupdate');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

    return redirect()->route('siswa.index')->with('berhasil', 'Data siswa berhasil dihapus');
    }
}