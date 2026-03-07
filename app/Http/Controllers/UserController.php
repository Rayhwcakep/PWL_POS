<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dengan eloquent model
        $data = [
            'nama'=> 'pelanggan pertama'

        ];
    UserModel::where('username', 'customer-1')->update($data); //tambahkan data ke tabel m_user
    
    // coba akses model UserModel
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
