<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage; 
use App\Models\Pos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PosController extends Controller
{
    // mengambil semua data dari database
    public function index(){
        $posts = Pos::all();
        return view('berita', compact('posts'));
    }

    public function show($id)
    {
        $post = Pos::findOrFail($id);
        return view('berita_detail', compact('post'));
    }

    public function admin(){
        $posts = Pos::all();
        return view('admin', compact('posts'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judul'   => 'required|string|min:5',
            'isi_berita' => 'required|string|min:30',
            'author'  => 'required|min:1',
            'posisi'  => 'required|min:1'
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('beritas', $image->hashName(), 'public');

        // simpan data
        Pos::create([
            'image'   => $image->hashName(),
            'judul'   => $request->judul,
            'isi_berita' => $request->isi_berita,
            'author'  => $request->author,
            'posisi'  => $request->posisi,
        ]);

        return redirect()->route('admin.index')
                         ->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function update(Request $request, $id): RedirectResponse
{
    $post = Pos::findOrFail($id);

    $request->validate([
        'judul'     => 'required|string|min:5',
        'isi_berita'=> 'required|string|min:30',
        'author'    => 'required|min:1',
        'posisi'    => 'required|min:1',
        'image'     => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
    ]);

    // handle image kalau ada yang baru
    if ($request->hasFile('image')) {
    Storage::delete('public/beritas/' . $post->image);
    $image = $request->file('image');
    $image->storeAs('beritas', $image->hashName(), 'public');
    $imageName = $image->hashName(); // konsisten dengan store()
} else {
    $imageName = $post->image;
}

    $post->update([
        'judul'      => $request->judul,
        'isi_berita' => $request->isi_berita,
        'author'     => $request->author,
        'posisi'     => $request->posisi,
        'image'      => $imageName,
    ]);

    return redirect()->route('admin.index')->with('success', 'Berita berhasil diupdate!');
}
public function destroy(Pos $id): RedirectResponse
{
    $id->delete();
    return redirect()->route('admin.index')->with('success', 'Berita berhasil dihapus!');
}
}