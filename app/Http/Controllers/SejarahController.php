<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::get();
        return view('sejarah.index', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sejarah = Sejarah::all();
        return view('sejarah.create', compact('sejarah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sejarah' => 'required',
        ]);

        $sejarah = new Sejarah();
        $sejarah->sejarah = $request->sejarah;

        $sejarah->save();
        return redirect()->route('sejarah.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sejarah = Sejarah::FindOrFail($id);
        return view('sejarah.show', compact('sejarah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sejarah = Sejarah::FindOrFail($id);
        return view('sejarah.edit', compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'sejarah' => 'required',
        ]);

        $sejarah = Sejarah::FindOrFail($id);
        $sejarah->sejarah = $request->sejarah;

        $sejarah->save();
        return redirect()->route('sejarah.index')
            ->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sejarah = Sejarah::FindOrFail($id);
        $sejarah->delete();
        // $produk->kategori()->detach();
        return redirect()->route('sejarah.index')
            ->with('success', 'data berhasil dihapus');
    }
}
