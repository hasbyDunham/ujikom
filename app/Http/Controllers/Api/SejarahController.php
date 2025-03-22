<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sejarah;
use Storage;
use Str;
use Validator;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'daftar sejarah',
            'data' => $sejarah,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sejarah' => 'required',
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
            // $path = $request->file('foto')->store('public/sejarah');

            $sejarah = new Sejarah;
            $sejarah->sejarah = $request->sejarah;
            // $sejarah->id_kategori = $request->id_kategori;

            $sejarah->save();

            // melampirkan banyak tag
            // $sejarah->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'sejarah berhasil dibuat',
                'data' => $sejarah,
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
            $sejarah = Sejarah::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'detail sejarah',
                'data' => $sejarah,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'sejarah tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'sejarah' => 'required',
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
            $sejarah = Sejarah::findOrFail($id);
            // hapus foto lama
            $sejarah->sejarah = $request->sejarah;
            $sejarah->save();

            // melampirkan banyak tag
            // $sejarah->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'sejarah berhasil diperbarui',
                'data' => $sejarah,
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
            $sejarah = Sejarah::findOrFail($id);
            // hapus tag sejarah
            // $sejarah->tag()->detach();
            // hapus foto
            $sejarah->delete();
            return response()->json([
                'success' => true,
                'message' => 'sejarah ' . $sejarah->sejarah . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'sejarah tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}
