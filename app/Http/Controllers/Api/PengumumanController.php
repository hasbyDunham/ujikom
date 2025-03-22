<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use Storage;
use Str;
use Validator;

class PengumumanController extends Controller
{
    public function index()
{
    $pengumuman = Pengumuman::latest()->get()->map(function ($item) {
        $item->foto = url('storage/images/pengumuman/' . $item->foto);
        return $item;
    });

    return response()->json([
        'success' => true,
        'message' => 'daftar pengumuman',
        'data' => $pengumuman,
    ], 200);
}


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_pengumuman' => 'required|',
            'deskripsi_pengumuman' => 'required',
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
            // $path = $request->file('foto')->store('public/pengumuman');

            $pengumuman = new Pengumuman;
            $pengumuman->judul_pengumuman = $request->judul_pengumuman;
            $pengumuman->slug = Str::slug($request->judul_pengumuman);
            $pengumuman->deskripsi_pengumuman = $request->deskripsi_pengumuman;
            $pengumuman->foto = $request->foto;
            $pengumuman->flag = $request->flag;
            $pengumuman->user_id = $request->user_id;
            // $pengumuman->id_kategori = $request->id_kategori;

            if ($request->hasFile('foto')) {
                $img = $request->file('foto');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/pengumuman/', $name);
                $pengumuman->foto = $name;
            }
            $pengumuman->save();

            // melampirkan banyak tag
            // $pengumuman->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'pengumuman berhasil dibuat',
                'data' => $pengumuman,
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
            $pengumuman = Pengumuman::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'detail pengumuman',
                'data' => $pengumuman,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'pengumuman tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul_pengumuman' => 'required',
            'deskripsi_pengumuman' => 'required',
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
            $pengumuman = Pengumuman::findOrFail($id);
            // hapus foto lama
            if ($request->hasFile('foto')) {
                // $berita->deleteImage();
                $img = $request->file('foto');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/pengumuman/', $name);
                $pengumuman->foto = $name;
            }
            $pengumuman->judul_pengumuman = $request->judul_pengumuman;
            $pengumuman->slug = Str::slug($request->judul_pengumuman);
            $pengumuman->deskripsi_pengumuman = $request->deskripsi_pengumuman;
            $pengumuman->flag = $request->flag;
            $pengumuman->user_id = $request->user_id;
            // $pengumuman->id_kategori = $request->id_kategori;
            $pengumuman->save();

            // melampirkan banyak tag
            // $pengumuman->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'pengumuman berhasil diperbarui',
                'data' => $pengumuman,
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
            $pengumuman = Pengumuman::findOrFail($id);
            // hapus tag pengumuman
            // $pengumuman->tag()->detach();
            // hapus foto
            Storage::delete($pengumuman->foto);
            $pengumuman->delete();
            return response()->json([
                'success' => true,
                'message' => 'pengumuman ' . $pengumuman->judul_pengumuman . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'pengumuman tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}
