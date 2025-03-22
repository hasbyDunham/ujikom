<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BeritaF;
use Storage;
use Str;
use Validator;

class BeritaFController extends Controller
{
    public function index()
    {
        $beritaF = BeritaF::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'daftar beritaF',
            'data' => $beritaF,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_beritaF' => 'required|',
            'deskripsiF' => 'required',
            'foto' => 'required|image|mimes:png,jpg|max:2048',
            'flag' => 'required',
            'user_id' => 'required',
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
            // $path = $request->file('foto')->store('public/beritaF');

            $beritaF = new BeritaF;
            $beritaF->judul_beritaF = $request->judul_beritaF;
            $beritaF->slug = Str::slug($request->judul_beritaF);
            $beritaF->deskripsiF = $request->deskripsiF;
            $beritaF->foto = $request->foto;
            $beritaF->flag = $request->flag;
            $beritaF->user_id = $request->user_id;
            // $beritaF->id_kategori = $request->id_kategori;

            if ($request->hasFile('foto')) {
                $img = $request->file('foto');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/beritaF/', $name);
                $beritaF->foto = $name;
            }
            $beritaF->save();

            // melampirkan banyak tag
            // $beritaF->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'beritaF berhasil dibuat',
                'data' => $beritaF,
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
            $beritaF = BeritaF::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'detail beritaF',
                'data' => $beritaF,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'beritaF tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul_beritaF' => 'required',
            'deskripsiF' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg|max:2048',
            'flag' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $beritaF = BeritaF::findOrFail($id);
            // hapus foto lama
            if ($request->hasFile('foto')) {
                // $berita->deleteImage();
                $img = $request->file('foto');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/beritaF/', $name);
                $beritaF->foto = $name;
            }
            $beritaF->judul_beritaF = $request->judul_beritaF;
            $beritaF->slug = Str::slug($request->judul_beritaF);
            $beritaF->deskripsiF = $request->deskripsiF;
            $beritaF->flag = $request->flag;
            $beritaF->user_id = $request->user_id;
            // $beritaF->id_kategori = $request->id_kategori;
            $beritaF->save();

            // melampirkan banyak tag
            // $beritaF->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'beritaF berhasil diperbarui',
                'data' => $beritaF,
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
            $beritaF = BeritaF::findOrFail($id);
            // hapus tag beritaF
            // $beritaF->tag()->detach();
            // hapus foto
            Storage::delete($beritaF->foto);
            $beritaF->delete();
            return response()->json([
                'success' => true,
                'message' => 'beritaF ' . $beritaF->judul_beritaF . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'beritaF tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}
