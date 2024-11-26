<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'biografia',
        'website',
        'user_id'
    ];

    public function user(){
        //$user = User::find($this->user_id);
        return $this->belongsTo(User::class);
    }
}
