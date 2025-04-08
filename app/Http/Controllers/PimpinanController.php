<?php

namespace App\Http\Controllers;

use App\Models\Pimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pimpinan = Pimpinan::get();
        return view('pimpinan.index', compact('pimpinan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pimpinan = Pimpinan::all();
        return view('pimpinan.create', compact('pimpinan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|max:2080|mimes:png,jpg',
        ]);

        $pimpinan = new Pimpinan();
        $pimpinan->nama = $request->nama;
        $pimpinan->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/pimpinan', $name); // Simpan ke storage/app/public/images/pimpinan
            $pimpinan->foto = $name;
        }

        $pimpinan->save();
        return redirect()->route('pimpinan.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pimpinan = Pimpinan::FindOrFail($id);
        return view('pimpinan.show', compact('pimpinan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pimpinan = Pimpinan::FindOrFail($id);
        return view('pimpinan.edit', compact('pimpinan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $pimpinan = Pimpinan::FindOrFail($id);
        $pimpinan->nama = $request->nama;
        $pimpinan->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pimpinan->foto) {
                Storage::delete('public/images/pimpinan/' . $pimpinan->foto);
            }
            // Simpan foto baru ke storage
            $img = $request->file('foto');
            $name = time() . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/pimpinan', $name);

            // Simpan hanya nama file di database
            $pimpinan->foto = $name;
        }

        $pimpinan->save();
        return redirect()->route('pimpinan.index')
            ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pimpinan = Pimpinan::FindOrFail($id);
        $pimpinan->delete();
        // $produk->kategori()->detach();
        return redirect()->route('pimpinan.index')
            ->with('success', 'data berhasil dihapus');
    }
}
