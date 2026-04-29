<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // //get data dari database
   

public function index()
{
    $student = Siswa::all(); // ambil data dari database 
    return view('siswa', compact('student'));
}

public function show($id)
{
    $post = siswa::findOrFail($id); // ambil data berdasarkan ID
    return view('siswa_detal', compact('post'));  

    
}

 public function store(Request $request): RedirectResponse
    {
        $request->validate([
            
            'nama_lengkap'   => 'required|string|min:5',
            'kelas' => 'required|string|min:1',
            'jurusan'  => 'required|min:2',
           
        ]);

     
        // simpan data
        Siswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->route('siswa.index')
                         ->with(['success' => 'Data Berhasil Disimpan!']);
    }
}


    