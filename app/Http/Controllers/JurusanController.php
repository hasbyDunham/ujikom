<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Str;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::latest()->get();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jurusan' => 'required',
            'akreditasi' => 'required',
            'gelar' => 'required',
            'penyelenggara' => 'required',
            'tgl_berdiri' => 'required',
            'judul_ket1' => 'required',
            'deskripsi1' => 'required',
            'foto1' => 'required|max:2080|mimes:png,jpg',
            'judul_ket2' => 'required',
            'deskripsi2' => 'required',
            'foto2' => 'required|max:2080|mimes:png,jpg',
            'visi' => 'required',
            'misi' => 'required',
            // 'tujuan' => 'required',
            // 'sasaran' => 'required',
            // 'judul_akhir' => 'required',
            // 'nanya' => 'required',
            // 'url' => 'required',
        ]);

        $jurusan = new Jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $slug = Str::slug($request->nama_jurusan);
        do {
            $randomString = Str::random(5);
            $uniqueSlug   = $slug . '-' . $randomString;
        } while (Jurusan::where('slug', $uniqueSlug)->exists());
        $jurusan->slug = $uniqueSlug;
        $jurusan->akreditasi = $request->akreditasi;
        $jurusan->gelar = $request->gelar;
        $jurusan->penyelenggara = $request->penyelenggara;
        $jurusan->tgl_berdiri = $request->tgl_berdiri;
        $jurusan->judul_ket1 = $request->judul_ket1;
        $jurusan->deskripsi1 = $request->deskripsi1;
        $jurusan->judul_ket2 = $request->judul_ket2;
        $jurusan->deskripsi2 = $request->deskripsi2;
        $jurusan->visi = $request->visi;
        $jurusan->misi = $request->misi;
        $jurusan->tujuan = $request->tujuan;
        $jurusan->sasaran = $request->sasaran;
        $jurusan->judul_akhir = $request->judul_akhir;
        $jurusan->nanya = $request->nanya;
        $jurusan->url = $request->url;

        if ($request->hasFile('foto1')) {
            $img = $request->file('foto1');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/jurusan', $name); // Simpan ke storage/app/public/images/pengumuman
            $jurusan->foto1 = $name;
        }
        if ($request->hasFile('foto2')) {
            $img = $request->file('foto2');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/jurusan', $name); // Simpan ke storage/app/public/images/pengumuman
            $jurusan->foto2 = $name;
        }

        $jurusan->save();
        return redirect()->route('jurusan.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jurusan = Jurusan::FindOrFail($id);
        return view('jurusan.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::FindOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_jurusan' => 'required',
            'akreditasi' => 'required',
            'gelar' => 'required',
            'penyelenggara' => 'required',
            'tgl_berdiri' => 'required',
            'judul_ket1' => 'required',
            'deskripsi1' => 'required',
            // 'foto1' => 'required|max:2080|mimes:png,jpg',
            'judul_ket2' => 'required',
            'deskripsi2' => 'required',
            // 'foto2' => 'required|max:2080|mimes:png,jpg',
            'visi' => 'required',
            'misi' => 'required',
            // 'tujuan' => 'required',
            // 'sasaran' => 'required',
            // 'judul_akhir' => 'required',
            // 'nanya' => 'required',
            // 'url' => 'required',
        ]);

        $jurusan = Jurusan::FindOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->akreditasi = $request->akreditasi;
        $jurusan->gelar = $request->gelar;
        $jurusan->penyelenggara = $request->penyelenggara;
        $jurusan->tgl_berdiri = $request->tgl_berdiri;
        $jurusan->judul_ket1 = $request->judul_ket1;
        $jurusan->deskripsi1 = $request->deskripsi1;
        $jurusan->judul_ket2 = $request->judul_ket2;
        $jurusan->deskripsi2 = $request->deskripsi2;
        $jurusan->visi = $request->visi;
        $jurusan->misi = $request->misi;
        $jurusan->tujuan = $request->tujuan;
        $jurusan->sasaran = $request->sasaran;
        $jurusan->judul_akhir = $request->judul_akhir;
        $jurusan->nanya = $request->nanya;
        $jurusan->url = $request->url;

        if ($request->hasFile('foto1')) {
            // Hapus foto1 lama jika ada
            if ($jurusan->foto1) {
                Storage::delete('public/images/jurusan/' . $jurusan->foto1);
            }
            // Simpan foto1 baru ke storage
            $img = $request->file('foto1');
            $name = time() . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/jurusan', $name);

            // Simpan hanya nama file di database
            $jurusan->foto1 = $name;
        }
        if ($request->hasFile('foto2')) {
            // Hapus foto2 lama jika ada
            if ($jurusan->foto2) {
                Storage::delete('public/images/jurusan/' . $jurusan->foto2);
            }
            // Simpan foto2 baru ke storage
            $img = $request->file('foto2');
            $name = time() . '_' . $img->getClientOriginalName();
            $path = $img->storeAs('public/images/jurusan', $name);

            // Simpan hanya nama file di database
            $jurusan->foto2 = $name;
        }


        $jurusan->save();
        return redirect()->route('jurusan.index')
            ->with('success', 'data berhasil ditedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::FindOrFail($id);
        $jurusan->delete();
        // $produk->kategori()->detach();
        return redirect()->route('jurusan.index')
            ->with('success', 'data berhasil dihapus');
    }
}
