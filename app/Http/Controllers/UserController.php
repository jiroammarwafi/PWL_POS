<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
     $user = UserModel::where('level_id', 1)->first(); // Mengambil data user dengan level_id 2
     return view('user', ['data' => $user]); // Mengirim data user ke view 'user'   
}
}