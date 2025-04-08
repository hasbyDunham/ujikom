<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sambutan = Sambutan::get();
        return view('sambutan.index', compact('sambutan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sambutan = Sambutan::all();
        return view('sambutan.create', compact('sambutan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sambutan' => 'required',
            'foto' => 'required|max:2080|mimes:png,jpg',
        ]);

        $sambutan = new Sambutan();
        $sambutan->sambutan = $request->sambutan;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/sambutan', $name); // Simpan ke storage/app/public/images/pengumuman
            $sambutan->foto = $name;
        }

        $sambutan->save();
        return redirect()->route('sambutan.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sambutan = Sambutan::FindOrFail($id);
        return view('sambutan.show', compact('sambutan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sambutan = Sambutan::FindOrFail($id);
        return view('sambutan.edit', compact('sambutan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'sambutan' => 'required',
        ]);

        $sambutan = Sambutan::FindOrFail($id);
        $sambutan->sambutan = $request->sambutan;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pengumuman->foto) {
                Storage::delete('public/images/pengumuman/' . $pengumuman->foto);
            }
            // Simpan foto baru ke storage
            $img = $request->file('foto');
            $name = time() . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/pengumuman', $name);

            // Simpan hanya nama file di database
            $pengumuman->foto = $name;
        }

        $sambutan->save();
        return redirect()->route('sambutan.index')
            ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sambutan = Sambutan::FindOrFail($id);
        $sambutan->delete();
        // $produk->kategori()->detach();
        return redirect()->route('sambutan.index')
            ->with('success', 'data berhasil dihapus');
    }
}
