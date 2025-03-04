<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\BeritaF;
use App\Models\Pengumuman;
use App\Models\Jurusan;
use App\Models\Sambutan;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $berita = Berita::get();
        $beritaF = BeritaF::get();
        $pengumuman = Pengumuman::get();
        $jurusan = Jurusan::get();
        $sambutan = sambutan::get();
        return view('welcome', compact('berita', 'beritaF', 'pengumuman', 'jurusan', 'sambutan'));
    }

    public function sambutanIndex()
    {
        $sambutan = Sambutan::get();
        return view('sambutandekan',  compact('sambutan'));
    }

    // public function sejarahIndex()
    // {
    //     $sejarah = Sejarah::get();
    //     return view('welcome', compact('sejarah', 'sejarahF', 'pengumuman'));
    // }

    public function beritaShow($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('detail', compact('berita'));
    }

    public function pengumumanShow($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        return view('detailP', compact('pengumuman'));
    }

    public function beritaFShow($slug)
    {
        $beritaF = BeritaF::where('slug', $slug)->firstOrFail();
        return view('detailF', compact('beritaF'));
    }

    public function jurusanFShow($slug)
    {
        $jurusan = Jurusan::where('slug', $slug)->firstOrFail();
        return view('jurusanF.detailjurusan', compact('jurusan'));
    }
}
