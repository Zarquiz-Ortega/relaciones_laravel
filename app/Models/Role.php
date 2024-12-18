<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //* Relacion N:N 
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permisos(){
        return $this->belongsToMany(Permiso::class);
    }
}
