<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        //Masuk halaman Login
        return view('sesi.index');
    }
    
    function login(Request $request)
    {
        $logintype = filter_var($request->input('email_or_username'), FILTER_VALIDATE_EMAIL)? 'email' : 'username';

        $request->validate([
            'email_or_username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);
    
        $infologin = [
            $logintype =>$request->input('email_or_username'),
            'password' => $request->input('password')
        ];
    
            // dd($infologin);
        if(Auth::attempt($infologin)){
            
            $request->session()->regenerateToken();

            return redirect('siswa')->with('success','Berhasil Login');
        }
            // Jika Otentikasi gagal maka,akan dialihkan ke form login dengan pesan eror 
            return back()->with('erorr', 'Password yang anda masukan tidak valid');
    }
    function register()
    {
        //Masuk kedalam form registrasi
        return view('/sesi/register');
    }

    function create(Request $request)
    {
        //Validasi data yg diterima dari function register
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib diisi',            
            'username.required' => 'Username wajib diisi',
            'username.unique' => 'Username Sudah ada',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukan email yang valid',             
            'email.unique' => 'Email sudah pernah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan adalah 6 karakter'
        ]);
        
        //Menyimpan data pengguna yg baru dibuat kedalam tabel users
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ]);
        
            // Jika otentikasi berhasil, redirect ke halaman login dengan pesan sukses
            return redirect('/sesi')->with('success','Akun berhasil terdaftar. Silakan login menggunakan email dan password yang Anda daftarkan.');
    }

    
    function logout(Request $request)
    {
        //Melakukan log-out user dan Mengakhiri sesi dan regenerasi Token baru setelah sesi tersebut dihapus
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        //Mengalihkan ke halaman login saat melakukan log-out dengan pesan 'berhasil log-out'
        return redirect('sesi')->with('success','Berhasil Log-Out');
    }

}