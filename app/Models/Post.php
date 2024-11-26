<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'body',
        'user_id',
        'categoria_id',
    ];

    //relacion uno a muchos inversa (user->post)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //relacion uno a muchos inversa (post->categoria)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
