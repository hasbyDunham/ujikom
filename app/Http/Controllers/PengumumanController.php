<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getPengumumanById(Request $request)
    {
        //     // \Log::info('ID yang diterima: ' . $id);
        // dd($request->id);
        // dd($response);
        // $pengumuman = Pengumuman::find(1);
        $pengumuman = Pengumuman::findOrFail($request->id);
        return view('detailP', ['pengumuman' => $pengumuman]);
    }
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();
        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.create', compact('pengumuman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_pengumuman' => 'required',
            'deskripsi_pengumuman' => 'required',
            'foto' => 'required|max:2080|mimes:png,jpg',
            'flag' => 'required',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->judul_pengumuman = $request->judul_pengumuman;
        $slug = Str::slug($request->judul_pengumuman);
        do {
            $randomString = Str::random(5);
            $uniqueSlug   = $slug . '-' . $randomString;
        } while (Pengumuman::where('slug', $uniqueSlug)->exists());
        $pengumuman->slug = $uniqueSlug;
        $pengumuman->deskripsi_pengumuman = $request->deskripsi_pengumuman;
        $pengumuman->flag = $request->flag;
        $pengumuman->user_id = auth()->id();

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/pengumuman', $name); // Simpan ke storage/app/public/images/pengumuman
            $pengumuman->foto = $name;
        }

        $pengumuman->save();
        return redirect()->route('pengumuman.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::FindOrFail($id);
        return view('pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::FindOrFail($id);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_pengumuman' => 'required',
            'deskripsi_pengumuman' => 'required',
            'flag' => 'required'
        ]);

        $pengumuman = Pengumuman::FindOrFail($id);
        $pengumuman->judul_pengumuman = $request->judul_pengumuman;
        $pengumuman->deskripsi_pengumuman = $request->deskripsi_pengumuman;
        $pengumuman->flag = $request->flag;
        $pengumuman->user_id = auth()->id();

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

        $pengumuman->save();
        return redirect()->route('pengumuman.index')
            ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::FindOrFail($id);
        $pengumuman->delete();
        // $produk->kategori()->detach();
        return redirect()->route('pengumuman.index')
            ->with('success', 'data berhasil dihapus');
    }
}
