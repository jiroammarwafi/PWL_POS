<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    /* 
        Praktikum 2.2: Not Found Exceptions
        $user = UserModel::findOrFail(1);// Mencari user dengan ID 1, jika tidak ditemukan akan menghasilkan error 404
        $user = UserModel::where('username', 'manager9')->firstOrFail(); // Mencari user dengan username 'manager9', jika tidak ditemukan akan menghasilkan error 404
    */
    $user = UserModel::where('level_id', 2)->count(); // Menghitung jumlah user dengan level_id 2
    // dd($user); // Menampilkan hasil perhitungan jumlah user dengan level_id 2
    return view('user', ['data' => $user]); // Mengirim data user ke view 'user'   
}
}