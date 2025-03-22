<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar berita',
            'data' => $berita->map(function ($item) {
                return [
                    'id' => $item->id,
                    'judul_berita' => $item->judul_berita,
                    'deskripsi' => $item->deskripsi,
                    'foto' => $item->foto ? url('storage/images/berita/' . $item->foto) : null,
                    'flag' => $item->flag
                ];
            })
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'flag' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $berita = new Berita;
            $berita->judul_berita = $request->judul_berita;
            $berita->slug = Str::slug($request->judul_berita);
            $berita->deskripsi = $request->deskripsi;
            $berita->flag = $request->flag;
            $berita->user_id = $request->user_id;

            if ($request->hasFile('foto')) {
                $img = $request->file('foto');
                $name = time() . '_' . Str::random(10) . '.' . $img->getClientOriginalExtension();
                $img->storeAs('public/images/berita', $name);
                $berita->foto = $name;
            }

            $berita->save();

            return response()->json([
                'success' => true,
                'message' => 'Berita berhasil dibuat',
                'data' => $berita,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $berita = Berita::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Detail berita',
                'data' => $berita,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Berita tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'flag' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $berita = Berita::findOrFail($id);

            if ($request->hasFile('foto')) {
                // Hapus foto lama
                if ($berita->foto) {
                    Storage::delete('public/images/berita/' . $berita->foto);
                }

                // Simpan foto baru
                $img = $request->file('foto');
                $name = time() . '_' . Str::random(10) . '.' . $img->getClientOriginalExtension();
                $img->storeAs('public/images/berita', $name);
                $berita->foto = $name;
            }

            $berita->judul_berita = $request->judul_berita;
            $berita->slug = Str::slug($request->judul_berita);
            $berita->deskripsi = $request->deskripsi;
            $berita->flag = $request->flag;
            $berita->user_id = $request->user_id;
            $berita->save();

            return response()->json([
                'success' => true,
                'message' => 'Berita berhasil diperbarui',
                'data' => $berita,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $berita = Berita::findOrFail($id);

            // Hapus foto jika ada
            if ($berita->foto) {
                Storage::delete('public/images/berita/' . $berita->foto);
            }

            $berita->delete();

            return response()->json([
                'success' => true,
                'message' => 'Berita ' . $berita->judul_berita . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Berita tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}

