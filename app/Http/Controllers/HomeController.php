<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
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
        $pengumuman = Pengumuman::count('id');
        $berita = Berita::count('id');
        return view('home', compact('user', 'pengumuman', 'berita'));
    }
}
