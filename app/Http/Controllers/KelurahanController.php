<?php

namespace App\Http\Controllers;

use App\Models\kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahan = kelurahan::get();

        return view('Kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->Validate([
            'nama' => 'required|string',
            'kecamatan_id' => 'required|numeric',
        ]);

        //if valid, save the data
        Kelurahan::create([
            'nama' => $request|nama,
            'kecamatan_id' => $request|kecamatan_id,
        ]);

        return redirect()
          ->route('kelurahan.index')
          ->with ('success', 'kelurahan berhasil dibuat');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelurahan $kelurahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelurahan $kelurahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelurahan $kelurahan)
    {
        //
    }
}
