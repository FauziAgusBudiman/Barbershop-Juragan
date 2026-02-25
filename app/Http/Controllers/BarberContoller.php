<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\vc;
use Illuminate\Http\Request;

class BarberContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barber = \App\Models\Barber::all();
        return view('admin.barbers.index', compact('barber'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.barbers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'photo' => 'required|max:2048'
        ]);

        $photoPath = $request->file('photo')->store('public', 'images');

        Barber::create([
            'name' => $request->name,
            'specialist' => $request->specialist,
            'photo' => $photoPath
        ]);

        return redirect()->route('barbers.index')
                         ->with('success', 'Barber berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(vc $vc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vc $vc)
    {
        $barber = \App\Models\Barber::findOrFail($vc->id);
        return view('admin.barbers.edit', compact('barber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vc $vc)
    {
        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $barber = \App\Models\Barber::findOrFail($vc->id);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($barber->photo && file_exists(public_path('images/' . $barber->photo))) {
                unlink(public_path('images/' . $barber->photo));
            }

            $photoFile = $request->file('photo');
            $photoName = time().'_'.$photoFile->getClientOriginalName();
            $photoFile->move(public_path('images'), $photoName);
            $barber->photo = $photoName;
        }

        $barber->name = $request->name;
        $barber->specialist = $request->specialist; 
        $barber->save();

        return redirect()->route('barbers.index')
                         ->with('success', 'Barber berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vc $vc)
    {
        $barber = \App\Models\Barber::findOrFail($vc->id);

        // Hapus foto jika ada
        if ($barber->photo && file_exists(public_path('storage/' . $barber->photo))) {
            unlink(public_path('storage/' . $barber->photo));
        }

        $barber->delete();

        return redirect()->route('barbers.index')
                        ->with('success', 'Barber berhasil dihapus');
    }
}
