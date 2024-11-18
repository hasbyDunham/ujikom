<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaF extends Model
{
    use HasFactory;
    public $fillable = ['id', 'judul_beritaF', 'deskripsiF', 'foto', 'flag', 'user_id' ];
    public $visible = ['id', 'judul_beritaF', 'deskripsiF', 'foto', 'flag', 'user_id'];
    public $timestamp = true;

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
