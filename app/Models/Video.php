<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descripcion',
        'url',
        'user_id'
    ];

    //* Relacion 1:n (inversa)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //* Relacion 1:N polimorfica
    public function comment(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    //* Relacion N:N polimorfica

    public function taggables(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

}
