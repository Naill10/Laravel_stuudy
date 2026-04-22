<?php
namespace App\Http\Controllers;
use App\Models\pos;
use Illuminate\Http\Request;

class PosController extends Controller
{
    //get data dari database
    public function index(){
        //mengangil semua data dari database
    
    $posts = pos::all();
    return view('berita', compact('posts'));

}
public function show($id)
{
    $post = pos::findOrFail($id); // ambil data berdasarkan ID
    return view('berita_detail', compact('post'));  

    
}

public function admin(){
    $posts = pos::all();
    return view('admin', compact('posts'));
}
}
