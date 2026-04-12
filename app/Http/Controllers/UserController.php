<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    // $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager22',
    //         'nama' => 'Manager Dua Dua',
    //         'password' => Hash::make('12345'), 
    //         'level_id' => 2
    //     ], // Jika tidak ada, maka buat record baru dengan data tersebut.
    // );

    $user = UserModel::firstOrNew(
        [
            'username' => 'manager33',
            'nama' => 'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ], // Mencari record dengan data tersebut.
    );
    $user ->save(); // Menyimpan record ke database jika belum ada, atau memperbarui jika sudah ada.
    return view('user', ['data' => $user]); // Mengirim data user ke view 'user'   
}
}