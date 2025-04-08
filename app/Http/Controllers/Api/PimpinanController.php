<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pimpinan;
use Storage;
use Str;
use Validator;

class PimpinanController extends Controller
{
    public function index()
    {
        $pimpinan = Pimpinan::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'daftar pimpinan',
            'data' => $pimpinan,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|',
            'jabatan' => 'required',
            'foto' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            // upload foto
            // $path = $request->file('foto')->store('public/pimpinan');

            $pimpinan = new Pimpinan;
            $pimpinan->nama = $request->nama;
            $pimpinan->jabatan = $request->jabatan;
            $pimpinan->foto = $request->foto;
            // $pimpinan->id_kategori = $request->id_kategori;

            if ($request->hasFile('foto')) {
                $img = $request->file('foto');
                $name = time() . '_' . Str::random(10) . '.' . $img->getClientOriginalExtension();
                $img->storeAs('public/images/pimpinan', $name);
                $pimpinan->foto = $name;
            }
            $pimpinan->save();

            // melampirkan banyak tag
            // $pimpinan->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'pimpinan berhasil dibuat',
                'data' => $pimpinan,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'terjadi kesalahan',
                'errors' => $e->getMessage(),
            ], 500);

        }

    }

    public function show(string $id)
    {
        try {
            $pimpinan = Pimpinan::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'detail pimpinan',
                'data' => $pimpinan,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'pimpinan tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $pimpinan = Pimpinan::findOrFail($id);
            // hapus foto lama
            if ($request->hasFile('foto')) {
                // Hapus foto lama
                if ($pimpinan->foto) {
                    Storage::delete('public/images/pimpinan/' . $pimpinan->foto);
                }
                // Simpan foto baru
                $img = $request->file('foto');
                $name = time() . '_' . Str::random(10) . '.' . $img->getClientOriginalExtension();
                $img->storeAs('public/images/pimpinan', $name);
                $pimpinan->foto = $name;
            }
            $pimpinan->nama = $request->nama;
            $pimpinan->jabatan = $request->jabatan;
            // $pimpinan->id_kategori = $request->id_kategori;
            $pimpinan->save();

            // melampirkan banyak tag
            // $pimpinan->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'pimpinan berhasil diperbarui',
                'data' => $pimpinan,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'terjadi kesalahan',
                'errors' => $e->getMessage(),
            ], 500);

        }
    }
    public function destroy(string $id)
    {
        try {
            $pimpinan = Pimpinan::findOrFail($id);
            // hapus tag pimpinan
            // $pimpinan->tag()->detach();
            // hapus foto
            if ($pimpinan->foto) {
                Storage::delete('public/images/pimpinan/' . $pimpinan->foto);
            }
            $pimpinan->delete();
            return response()->json([
                'success' => true,
                'message' => 'pimpinan ' . $pimpinan->nama . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'pimpinan tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}
