<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sambutan;
use Storage;
use Str;
use Validator;

class SambutanController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'daftar sambutan',
            'data' => $sambutan,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sambutan' => 'required',
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
            // $path = $request->file('foto')->store('public/sambutan');

            $sambutan = new Sambutan;
            $sambutan->sambutan = $request->sambutan;
            $sambutan->foto = $request->foto;
            // $sambutan->id_kategori = $request->id_kategori;

            if ($request->hasFile('foto')) {
                $img = $request->file('foto');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/sambutan/', $name);
                $sambutan->foto = $name;
            }
            $sambutan->save();

            // melampirkan banyak tag
            // $sambutan->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'sambutan berhasil dibuat',
                'data' => $sambutan,
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
            $sambutan = Sambutan::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'detail sambutan',
                'data' => $sambutan,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'sambutan tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'sambutan' => 'required',
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
            $sambutan = Sambutan::findOrFail($id);
            // hapus foto lama
            if ($request->hasFile('foto')) {
                // $sambutan->deleteImage();
                $img = $request->file('foto');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/sambutan/', $name);
                $sambutan->foto = $name;
            }
            $sambutan->sambutan = $request->sambutan;
            $sambutan->save();

            // melampirkan banyak tag
            // $sambutan->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'sambutan berhasil diperbarui',
                'data' => $sambutan,
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
            $sambutan = Sambutan::findOrFail($id);
            // hapus tag sambutan
            // $sambutan->tag()->detach();
            // hapus foto
            Storage::delete($sambutan->foto);
            $sambutan->delete();
            return response()->json([
                'success' => true,
                'message' => 'sambutan ' . $sambutan->sambutan . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'sambutan tidak ditemukan',
                'errors' => $e->getMessage(),
            ], 404);
        }
    }
}
