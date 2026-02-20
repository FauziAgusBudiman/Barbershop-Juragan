<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barber;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::latest()->get();
        return view('admin.barbers.index', compact('barbers'));
    }

    public function create()
    {
        return view('admin.barbers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $photo = $request->file('photo');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path('uploads'), $filename);

        Barber::create([
            'name' => $request->name,
            'specialist' => $request->specialist,
            'photo' => $filename
        ]);

        return redirect()->route('barbers.index')
                         ->with('success', 'Barber berhasil ditambahkan');
    }

    public function edit(Barber $barber)
    {
        return view('admin.barbers.edit', compact('barber'));
    }

    public function update(Request $request, Barber $barber)
    {
        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('photo')) {

            // hapus foto lama
            if (file_exists(public_path('uploads/'.$barber->photo))) {
                unlink(public_path('uploads/'.$barber->photo));
            }

            $photo = $request->file('photo');
            $filename = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('uploads'), $filename);

            $barber->photo = $filename;
        }

        $barber->name = $request->name;
        $barber->specialist = $request->specialist;
        $barber->save();

        return redirect()->route('barbers.index')
                    ->with('success', 'Barber berhasil diupdate');
    }

    public function destroy(Barber $barber)
    {
        if (file_exists(public_path('uploads/'.$barber->photo))) {
            unlink(public_path('uploads/'.$barber->photo));
        }

        $barber->delete();

        return back()->with('success', 'Barber berhasil dihapus');
    }
}