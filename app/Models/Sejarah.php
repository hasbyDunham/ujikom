<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Sejarah extends Model
{
    use HasFactory;
    public $fillable = ['id', 'sejarah'];
    public $visible = ['id', 'sejarah'];
    public $timestamp = true;
}
