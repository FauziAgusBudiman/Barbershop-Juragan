<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $filename);

        Gallery::create([
            'image' => $filename
        ]);

        return redirect()->route('galleries.index')
                        ->with('success', 'Gambar berhasil ditambahkan');
    }

    public function destroy(Gallery $gallery)
    {
        if (file_exists(public_path('uploads/'.$gallery->image))) {
            unlink(public_path('uploads/'.$gallery->image));
        }

        $gallery->delete();

        return back()->with('success', 'Gambar berhasil dihapus');
    }
}