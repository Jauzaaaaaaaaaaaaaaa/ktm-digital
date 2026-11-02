<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = array(
            'mahasiswas' => Mahasiswa::all()
        );
    
        return view('mahasiswa', $data);

    }

    public function insert(Request $request)
    {
        if ($request->isMethod('POST')) {
            $mahasiswa = new Mahasiswa();
            $mahasiswa->nim = $request->nim;
            $mahasiswa->nama = $request->nama;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->kelas = $request->kelas;
            $mahasiswa->hp = $request->hp;
            $mahasiswa->save();
            return redirect('/mahasiswa')->with(['message'=> 'Berhasil Menambahkan Data Mahasiswa Baru!!!']);
        }
        
        return view('insert');
    }
    
    public function update(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim) ->first();
        
        if ($request->isMethod('post')) {
            $mahasiswa->nama = $request->nama;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->kelas = $request->kelas;
            $mahasiswa->hp = $request->hp;
            $mahasiswa->save();
            return redirect('/mahasiswa')->with (['message'=> 'Berhasil Mengubah Data Mahasiswa!!!']);
            
        }

        $data = array(
            'mahasiswa' => $mahasiswa
        );

        return view('update', $data);
    }
    
    function delete(Request $request)
    {
    
        $mahasiswa = Mahasiswa::find($request->nim);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with(['message' => 'Berhasil Menghapus Data Mahasiswa!!!']);

    }

}