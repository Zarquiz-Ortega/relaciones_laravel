<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //* Relacion de N:N 
    public function Roles(){
        return $this->belongsToMany(Role::class);
    }
}
