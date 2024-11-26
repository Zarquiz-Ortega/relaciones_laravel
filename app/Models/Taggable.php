<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    use HasFactory;

    protected $fillable = ['tag_id', 'taggable_id', 'taggable_type'];

    //*Relacion de 1:N inversa 
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
