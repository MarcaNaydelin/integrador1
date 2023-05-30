<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retroalimentacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'retroalimentacion',
        'id_juegos',
    ];
}
