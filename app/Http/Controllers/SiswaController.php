<?php

namespace App\Http\Controllers;
use App\Models\siswa;
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
}

