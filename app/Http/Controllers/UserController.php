<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    $user = UserModel::findOr(1, ['username', 'nama'], function(){
        abort(404);
    }); // Mencari user dengan ID 1 dan hanya mengambil kolom 'username' dan 'nama'
     return view('user', ['data' => $user]); // Mengirim data user ke view 'user'   
}
}