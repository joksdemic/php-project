<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prijava extends Model
{
    use HasFactory;

    public function vrsta(){
        return $this->belongsTo(Vrstadokumenta::class);
    }
}
