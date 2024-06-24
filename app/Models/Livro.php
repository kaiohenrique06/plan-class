<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'autor', 'titulo', 'subtitulo', 'edicao', 'editora', 'ano_publicacao', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}