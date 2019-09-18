<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Kurnia Adhiwibowo";
        $pelajaran = ["IPA", "IPS", "UMUM"];
        return view('biodata', [ 'nama' => $nama, 'matkul' => $pelajaran ]);
    }
}
