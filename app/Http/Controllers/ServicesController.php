<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
        /**
        * Display a listing of the resource.
        */
        public function index()
        {
            $services = \App\Models\Service::all();
            return view('admin.services.index', compact('services'));
        }
    
        /**
        * Show the form for creating a new resource.
        */
        public function create()
        {
            return view('admin.services.create');
        }
    
        /**
        * Store a newly created resource in storage.
        */
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric'
            ]);

            \App\Models\Service::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);

            return redirect()->route('services.index')
                             ->with('success', 'Service berhasil ditambahkan');
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
            $service = \App\Models\Service::findOrFail($id);
            return view('admin.services.edit', compact('service'));
        }
    
        /**
        * Update the specified resource in storage.
        */
        public function update(Request $request, string $id)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric'
            ]);

            \App\Models\Service::findOrFail($id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);

            return redirect()->route('services.index')
                             ->with('success', 'Service berhasil diperbarui');
        }
    
        /**
        * Remove the specified resource from storage.
        */
        public function destroy(string $id)
        {
            \App\Models\Service::findOrFail($id)->delete();
            return redirect()->route('services.index')
                             ->with('success', 'Service berhasil dihapus');
        }
}
