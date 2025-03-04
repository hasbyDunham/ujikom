<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sambutan extends Model
{
    use HasFactory;
    public $fillable = ['id', 'sambutan', 'foto'];
    public $visible = ['id', 'sambutan', 'foto'];
    public $timestamp = true;
}
