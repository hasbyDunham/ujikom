<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pimpinan extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nama', 'jabatan', 'foto'];
    public $visible = ['id', 'nama', 'jabatan', 'foto'];
    public $timestamp = true;
}
