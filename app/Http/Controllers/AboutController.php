<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $about = \App\Models\About::first();
    return view('admin.about.index', compact('about'));
}

public function store(Request $request)
{
    $request->validate([
        'content' => 'required'
    ]);

    \App\Models\About::create([
        'content' => $request->content
    ]);

    return redirect()->back()->with('success', 'Data berhasil ditambahkan');
}

public function update(Request $request, $id)
{
    $request->validate([
        'content' => 'required'
    ]);

    \App\Models\About::findOrFail($id)->update([
        'content' => $request->content
    ]);

    return redirect()->back()->with('success', 'Data berhasil diperbarui');
}
}
