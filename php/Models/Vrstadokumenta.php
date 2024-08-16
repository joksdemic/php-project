<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vrstadokumenta extends Model
{
    use HasFactory;

    public function prijave(){
        return $this->hasMany(Prijava::class);
    }
}
