<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Profil;

class User extends Model
{
    use HasFactory;
    public function profils()
    {
        return $this->belongsTo(Profil::class,'profil_id');
    }
}
