<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    // Read (Membaca data pengguna dari database)
    $user = UserModel::all(); // Mengambil semua data pengguna dari database
    return view('user', ['data' => $user]); // Mengirim data pengguna ke view
}

    public function tambah()
    {
        return view('user_tambah'); // Menampilkan form untuk menambahkan pengguna baru
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }
}