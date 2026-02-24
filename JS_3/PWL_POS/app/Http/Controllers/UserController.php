<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

    //tambah data user dengan eloquent model    
    $data = [
        'username' => 'Pelanggan Pertama',
    ];
    UserModel::where('username', 'customer-1')->update($data); // update data user dengan eloquent model

        // coba akses model userModel
        $user = UserModel::all(); //ambil data dari m_user
        return view('user', ['data' => $user]);
    }
}
