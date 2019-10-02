<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        // $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah(){
        return view('mahasiswa/tambah');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        
        Mahasiswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa/edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();

        return redirect('/mahasiswa');
    }

    public function hapus($id){
               
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa');
    }

    public function trash(){
               
        $mahasiswa = Mahasiswa::onlyTrashed()->get();
        return view('mahasiswa/trash', ['mahasiswa' => $mahasiswa]);
    }

    public function kembalikan($id){
               
        $mahasiswa = Mahasiswa::onlyTrashed()->where('id',$id);
        $mahasiswa->restore();

        return redirect('/mahasiswa/trash');
    }

    public function kembalikan_semua(){
               
        $mahasiswa = Mahasiswa::onlyTrashed();
        $mahasiswa->restore();

        return redirect('/mahasiswa/trash');
    }

    public function hapus_permanen($id){
               
        $mahasiswa = Mahasiswa::onlyTrashed()->where('id',$id);
        $mahasiswa->forceDelete();

        return redirect('/mahasiswa/trash');
    }

    public function hapus_permanen_semua(){
               
        $mahasiswa = Mahasiswa::onlyTrashed();
        $mahasiswa->forceDelete();

        return redirect('/mahasiswa/trash');
    }
}
