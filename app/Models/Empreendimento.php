<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empreendimento extends Model
{
    /* use HasFactory; */
    protected $fillable = [
    'codigo',
    'nome',
    'localização',
    'previsão'
    ];
}
