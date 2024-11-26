<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['mensaje', 'commentable_id', 'commentable_type', 'user_id'];

    //*Relacion 1:n inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //* Relacion polimorfica 1:N
    public function commentable(){
        return $this->morphTo();
    }
}
