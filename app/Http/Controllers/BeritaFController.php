<?php

namespace App\Http\Controllers;

use App\Models\BeritaF;
use Illuminate\Http\Request;

class BeritaFController extends Controller
{
    public function getBeritaFById(Request $request)
    {
        //     // \Log::info('ID yang diterima: ' . $id);
        // dd($request->id);
        // dd($response);
        // $pengumuman = Pengumuman::find(1);
        $beritaF = BeritaF::findOrFail($request->id);
        return view('detailF', ['beritaF' => $beritaF]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritaF = BeritaF::latest()->get();
        return view('beritaF.index', compact('beritaF'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beritaF = BeritaF::all();
        return view('beritaF.create', compact('beritaF'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_beritaF' => 'required',
            'deskripsiF' => 'required',
            'foto' => 'required|max:2080|mimes:png,jpg',
            'flag' => 'required'
        ]);

        $beritaF = new BeritaF();
        $beritaF->judul_beritaF = $request->judul_beritaF;
        $beritaF->deskripsiF = $request->deskripsiF;
        $beritaF->flag = $request->flag;
        $pengumuman->user_id = auth()->id();

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/beritaF/', $name);
            $beritaF->foto = $name;
        }

        $beritaF->save();
        return redirect()->route('beritaF.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(BeritaF $beritaF)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $beritaF = BeritaF::FindOrFail($id);
        return view('beritaF.edit', compact('beritaF'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_beritaF'=> 'required',
            'deskripsiF'=> 'required',
            'flag'=> 'required',
        ]);

        $beritaF = BeritaF::FindOrFail($id);
        $beritaF->judul_beritaF = $request->judul_beritaF;
        $beritaF->deskripsiF = $request->deskripsiF;
        $beritaF->flag = $request->flag;
        $pengumuman->user_id = auth()->id();

        if($request->hasFile('foto')){
            // $beritaF->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/beritaF/', $name);
            $beritaF->foto = $name;
        }

        $beritaF->save();
        return redirect()->route('beritaF.index')
        ->with('success','data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $beritaF = BeritaF::FindOrFail($id);
        $beritaF->delete();
        // $produk->kategori()->detach();
        return redirect()->route('beritaF.index')
            ->with('success', 'data berhasil dihapus');
    }
}
