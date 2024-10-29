<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaF extends Model
{
    use HasFactory;
    public $fillable = ['id', 'judul_beritaF', 'deskripsiF', 'foto'];
    public $visible = ['id', 'judul_beritaF', 'deskripsiF', 'foto'];
    public $timestamp = true;
}
