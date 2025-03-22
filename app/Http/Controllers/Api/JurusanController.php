<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Storage;
use Str;
use Validator;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'daftar jurusan',
            'data'    => $jurusan,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_jurusan'  => 'required',
            'akreditasi'    => 'required',
            'gelar'         => 'required',
            'penyelenggara' => 'required',
            'tgl_berdiri'   => 'required',
            'judul_ket1'    => 'required',
            'deskripsi1'    => 'required',
            'foto1'         => 'required|max:2080|mimes:png,jpg',
            'judul_ket2'    => 'required',
            'deskripsi2'    => 'required',
            'foto2'         => 'required|max:2080|mimes:png,jpg',
            'visi'          => 'required',
            'misi'          => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            // upload foto
            // $path = $request->file('foto')->store('public/jurusan');

            $jurusan                 = new Jurusan;
            $jurusan->nama_jurusan   = $request->nama_jurusan;
            $jurusan->slug           = Str::slug($request->nama_jurusan);
            $jurusan->slug          = $uniqueSlug;
            $jurusan->akreditasi    = $request->akreditasi;
            $jurusan->gelar         = $request->gelar;
            $jurusan->penyelenggara = $request->penyelenggara;
            $jurusan->tgl_berdiri   = $request->tgl_berdiri;
            $jurusan->judul_ket1    = $request->judul_ket1;
            $jurusan->deskripsi1    = $request->deskripsi1;
            $jurusan->judul_ket2    = $request->judul_ket2;
            $jurusan->deskripsi2    = $request->deskripsi2;
            $jurusan->visi          = $request->visi;
            $jurusan->misi          = $request->misi;
            $jurusan->tujuan        = $request->tujuan;
            $jurusan->sasaran       = $request->sasaran;
            $jurusan->judul_akhir   = $request->judul_akhir;
            $jurusan->nanya         = $request->nanya;
            $jurusan->url           = $request->url;
            // $jurusan->id_kategori = $request->id_kategori;

            if ($request->hasFile('foto1')) {
                $img = $request->file('foto1');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/jurusan/', $name);
                $jurusan->foto1 = $name;
            }
            if ($request->hasFile('foto2')) {
                $img = $request->file('foto2');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/jurusan/', $name);
                $jurusan->foto2 = $name;
            }

            // melampirkan banyak tag
            // $jurusan->tag()->attach($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'jurusan berhasil dibuat',
                'data'    => $jurusan,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'terjadi kesalahan',
                'errors'  => $e->getMessage(),
            ], 500);

        }

    }

    public function show(string $id)
    {
        try {
            $jurusan = Jurusan::findOrFail($id);

            return response()->json([
                'success' => true,
                'message' => 'detail jurusan',
                'data'    => $jurusan,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'jurusan tidak ditemukan',
                'errors'  => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_jurusan' => 'required',
            'akreditasi' => 'required',
            'gelar' => 'required',
            'penyelenggara' => 'required',
            'tgl_berdiri' => 'required',
            'judul_ket1' => 'required',
            'deskripsi1' => 'required',
            // 'foto1' => 'required|max:2080|mimes:png,jpg',
            'judul_ket2' => 'required',
            'deskripsi2' => 'required',
            // 'foto2' => 'required|max:2080|mimes:png,jpg',
            'visi' => 'required',
            'misi' => 'required',
            // 'tujuan' => 'required',
            // 'sasaran' => 'required',
            // 'judul_akhir' => 'required',
            // 'nanya' => 'required',
            // 'url' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'validasi gagal',
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            $jurusan = Jurusan::findOrFail($id);
            // hapus foto lama
            if ($request->hasFile('foto1')) {
                $jurusan->deleteImage();
                $img = $request->file('foto1');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/jurusan/', $name);
                $jurusan->foto1 = $name;
            }
            if ($request->hasFile('foto2')) {
                $jurusan->deleteImage();
                $img = $request->file('foto2');
                $name = rand(1000, 9999) . $img->getClientOriginalName();
                $img->move('images/jurusan/', $name);
                $jurusan->foto2 = $name;
            }
            $jurusan->nama_jurusan = $request->nama_jurusan;
            $jurusan->slug         = Str::slug($request->nama_jurusan);
            $jurusan->akreditasi = $request->akreditasi;
            $jurusan->gelar = $request->gelar;
            $jurusan->penyelenggara = $request->penyelenggara;
            $jurusan->tgl_berdiri = $request->tgl_berdiri;
            $jurusan->judul_ket1 = $request->judul_ket1;
            $jurusan->deskripsi1 = $request->deskripsi1;
            $jurusan->judul_ket2 = $request->judul_ket2;
            $jurusan->deskripsi2 = $request->deskripsi2;
            $jurusan->visi = $request->visi;
            $jurusan->misi = $request->misi;
            $jurusan->tujuan = $request->tujuan;
            $jurusan->sasaran = $request->sasaran;
            $jurusan->judul_akhir = $request->judul_akhir;
            $jurusan->nanya = $request->nanya;
            $jurusan->url = $request->url;
            // $jurusan->id_kategori = $request->id_kategori;
            $jurusan->save();

            // melampirkan banyak tag
            // $jurusan->tag()->sync($request->tag);
            return response()->json([
                'success' => true,
                'message' => 'jurusan berhasil diperbarui',
                'data'    => $jurusan,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'terjadi kesalahan',
                'errors'  => $e->getMessage(),
            ], 500);

        }
    }
    public function destroy(string $id)
    {
        try {
            $jurusan = Jurusan::findOrFail($id);
            // hapus tag jurusan
            // $jurusan->tag()->detach();
            // hapus foto
            Storage::delete($jurusan->foto);
            $jurusan->delete();
            return response()->json([
                'success' => true,
                'message' => 'jurusan ' . $jurusan->nama_jurusan . ' berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'jurusan tidak ditemukan',
                'errors'  => $e->getMessage(),
            ], 404);
        }
    }
}
