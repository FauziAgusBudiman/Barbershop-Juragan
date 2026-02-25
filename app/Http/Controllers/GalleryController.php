<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = \App\Models\Gallery::all();
        return view('admin.gallery.index', compact ('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|file|max:2048',
        ]);

        $photoFile = $request->file('image');
        $photoName = time().'_'.$photoFile->getClientOriginalName();
        $photoFile->move(public_path('images'), $photoName);

        $photo = $photoName;


        \App\Models\Gallery::create([
            'title' => $request->title,
            'image' => $photo
        ]);

        return redirect()->route('gallery.index')
                         ->with('success', 'Gallery berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = \App\Models\Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $gallery = \App\Models\Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image && file_exists(public_path('images/' . $gallery->image))) {
                unlink(public_path('images/' . $gallery->image));
            }

            $imageFile = $request->file('image');
            $imageName = time().'_'.$imageFile->getClientOriginalName();
            $imageFile->move(public_path('images'), $imageName);
            $gallery->image = $imageName;
        }

        $gallery->title = $request->title;
        $gallery->save();

        return redirect()->route('admin.gallery.index')
                         ->with('success', 'Gallery berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = \App\Models\Gallery::findOrFail($id);

        // Hapus gambar dari penyimpanan jika ada
        if ($gallery->image && file_exists(public_path('uploads/' . $gallery->image))) {
            unlink(public_path('uploads/' . $gallery->image));
        }

        $gallery->delete();

        return redirect()->route('gallery.index')
                         ->with('success', 'Gallery berhasil dihapus');
    }
}
