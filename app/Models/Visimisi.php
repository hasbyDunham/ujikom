<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Visimisi extends Model
{
    use HasFactory;
    public $fillable = ['id', 'visi', 'misi', 'tujuan'];
    public $visible = ['id', 'visi', 'misi', 'tujuan'];
    public $timestamp = true;
}
