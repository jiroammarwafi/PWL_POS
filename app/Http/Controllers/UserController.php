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
}