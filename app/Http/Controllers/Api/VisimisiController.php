<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visimisi;
use Storage;
use Str;
use Validator;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::get();
        return response()->json([
            'success' => true,
            'message' => 'daftar visimisi',
            'data' => $visimisi,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'visi' => 'required|',
            'misi' => 'required',
            'tujuan' => 'required',
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
            // $path = $request->file('foto')->store('public/visimisi');

            $visimisi = new Visimisi;
            $visimisi->visi = $request->visi;
            $visimisi->misi = $request->misi;
            $visimisi->tujuan = $request->tujuan;
            // $visimisi->id_kategori = $request->id_kategori;

            $visimisi->save();

            // melampirkan banyak tag
            // $visimisi->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'visimisi berhasil dibuat',
                'data' => $visimisi,
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
            $visimisi = Visimisi::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'detail visimisi',
                'data' => $visimisi,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'visimisi tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $visimisi = Visimisi::findOrFail($id);
            // hapus foto lama
            $visimisi->visi = $request->visi;
            $visimisi->misi = $request->misi;
            $visimisi->tujuan = $request->tujuan;
            // $visimisi->id_kategori = $request->id_kategori;
            $visimisi->save();

            // melampirkan banyak tag
            // $visimisi->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'visimisi berhasil diperbarui',
                'data' => $visimisi,
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
            $visimisi = Visimisi::findOrFail($id);
            // hapus tag visimisi
            // $visimisi->tag()->detach();
            // hapus foto
            // Storage::delete($visimisi->foto);
            $visimisi->delete();
            return response()->json([
                'success' => true,
                'message' => 'visimisi ' . $visimisi->visi . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'visimisi tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}
