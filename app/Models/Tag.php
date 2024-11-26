<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //* Relacion 1:n  
    public function taggables(){
        return $this->morphByMany(Tag::class, 'taggable');
    }

    //* Relacion N:N polimorfica inversa

    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }

}
