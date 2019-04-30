<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $data = DB::table('mahasiswa')->get();
        return view('mahasiswa',['mhs' => $data]);
    }

    public function kontak()
    {
        return view('kontak');
    }
}