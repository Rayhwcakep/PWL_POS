<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriController extends Controller
{
    public function index()
    {
        /*$data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snacl/Makanan ringan',
            'created_at' => now()
        ];
        DB::table('m_kategori')->Insert($data);
        return 'insert data baru berhasil'; */

        /*$row = DB::table('m_kategori') ->where('kategori_kode', 'SNK')->update(['kategori_nama'=> 'Camilan']);
        return 'update data berhasil. jumlah data yang diupdate: ' . $row. ' baris';*/

        /*$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        return 'delete data berhasil. jumlah data yang dihapus: ' .$row. ' baris';*/

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data'=> $data]);
    }
}
