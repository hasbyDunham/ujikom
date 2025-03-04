<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Jurusan extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nama_jurusan', 'akreditasi', 'gelar', 'penyelenggara', 'tgl_berdiri', 'judul_ket1', 'deskripsi1', 'foto1', 'judul_ket2', 'deskripsi2', 'foto2', 'visi', 'misi', 'tujuan', 'sasaran', 'judul_akhir', 'nanya', 'url' ];
    public $visible = ['id', 'nama_jurusan', 'akreditasi', 'gelar', 'penyelenggara', 'tgl_berdiri', 'judul_ket1', 'deskripsi1', 'foto1', 'judul_ket2', 'deskripsi2', 'foto2', 'visi', 'misi', 'tujuan', 'sasaran', 'judul_akhir', 'nanya', 'url'];
    public $timestamp = true;
}
