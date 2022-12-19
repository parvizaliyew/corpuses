<?php

namespace App\Models;

use App\Models\Dekanat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Korpus extends Model
{
    use HasFactory;

    public function dekanat()
    {
        return $this->hasMany(Dekanat::class,'korpus_id','id');
    }
}
