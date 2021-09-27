<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'sinopse',
        'data_lancamento',
        'nota',
        'maior_18'
    ];

    public function generos()
    {
        return $this->belongsToMany('App\Models\Genero', 'genero_filmes');
    }
}
