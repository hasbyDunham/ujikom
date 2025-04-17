<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = Visimisi::latest()->get();
        return view('visimisi.index', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $visimisi = Visimisi::all();
        return view('visimisi.create', compact('visimisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
        ]);

        $visimisi = new Visimisi();
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->tujuan = $request->tujuan;


        $visimisi->save();
        return redirect()->route('visimisi.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $visimisi = Visimisi::FindOrFail($id);
        return view('visimisi.show', compact('visimisi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visimisi = Visimisi::FindOrFail($id);
        return view('visimisi.edit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
        ]);

        $visimisi = Visimisi::FindOrFail($id);
        $visimisi->visi = $request->visi;
        $visimisi->misi = $request->misi;
        $visimisi->tujuan = $request->tujuan;


        $visimisi->save();
        return redirect()->route('visimisi.index')
            ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $visimisi = Visimisi::FindOrFail($id);
        $visimisi->delete();
        // $produk->kategori()->detach();
        return redirect()->route('visimisi.index')
            ->with('success', 'data berhasil dihapus');
    }
}
