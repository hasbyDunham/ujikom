<?php

namespace App\Http\Controllers;

use App\Models\BeritaF;
use App\Models\Pengumuman;
use App\Models\Berita;
use App\Models\Jurusan;
use App\Models\Pimpinan;
use App\Models\Sambutan;
use App\Models\Visimisi;
use App\Models\Sejarah;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count('id');
        $berita = Berita::count('id');
        $pengumuman = Pengumuman::count('id');
        $beritaF = BeritaF::count('id');
        $jurusan = Jurusan::count('id');
        $sambutan = Sambutan::count('id');
        $pimpinan = Pimpinan::count('id');
        $visimisi = Visimisi::count('id');
        $sejarah = Sejarah::count('id');
        return view('home', compact('user', 'pengumuman', 'beritaF', 'berita', 'jurusan', 'sambutan', 'pimpinan', 'visimisi', 'sejarah'));
    }
}
