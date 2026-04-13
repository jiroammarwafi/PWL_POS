<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\LevelModel;

class UserController extends Controller
{
    public function index()
    {
        /*
        // Read (Membaca data pengguna dari database)
        $user = UserModel::with('level')->get(); // Mengambil semua data pengguna beserta relasi level
        dd($user); // Menampilkan data pengguna untuk debugging
        */
        $user = UserModel::with('level')->get(); // Mengambil semua data pengguna beserta relasi level
        return view('user', ['data' => $user]); // Mengirim data pengguna ke
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

    public function ubah($id)
    {
        $user = UserModel::find($id); // Mencari pengguna berdasarkan ID
        return view('user_ubah', ['data' => $user]); // Mengirim data pengguna ke view untuk diubah
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id); // Mencari pengguna berdasarkan ID
        $user->delete(); // Menghapus pengguna dari database

        return redirect('/user'); // Mengarahkan kembali ke halaman daftar pengguna
    }


}