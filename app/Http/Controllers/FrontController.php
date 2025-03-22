<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\BeritaF;
use App\Models\Pengumuman;
use App\Models\Jurusan;
use App\Models\Sambutan;
use App\Models\Sejarah;
use App\Models\Pimpinan;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $berita = Berita::get();
        $beritaF = BeritaF::get();
        $pengumuman = Pengumuman::get();
        $jurusan = Jurusan::get();
        $sambutan = Sambutan::get();
        $sejarah = Sejarah::get();
        $pimpinan = Pimpinan::get();
        return view('welcome', compact('berita', 'beritaF', 'pengumuman', 'jurusan', 'sambutan', 'sejarah','pimpinan'));
    }

    public function beritaIndex()
    {
        $berita = Berita::where('flag', '1')->orderBy('id', 'asc')->paginate(6);
        return view('berita',  compact('berita'));
    }

    public function beritaFIndex()
    {
        $beritaF = BeritaF::where('flag', '1')->orderBy('id', 'asc')->paginate(6);
        return view('beritaF',  compact('beritaF'));
    }

    public function pengumumanIndex()
    {
        $pengumuman = Pengumuman::where('flag', '1')->orderBy('id', 'asc')->paginate(6);
        return view('pengumuman',  compact('pengumuman'));
    }

    public function sambutanIndex()
    {
        $sambutan = Sambutan::get();
        return view('sambutandekan',  compact('sambutan'));
    }

    public function pimpinanIndex()
    {
        $pimpinan = Pimpinan::get();
        return view('pimpinan',  compact('pimpinan'));
    }

    public function sejarahIndex()
    {
        $sejarah = Sejarah::get();
        return view('sejarah',  compact('sejarah'));
    }


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
