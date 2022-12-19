<?php

namespace App\Models;

use App\Models\Dekanat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kafedra extends Model
{
    use HasFactory;

    public function getDekanat()
    {
        return $this->belongsTo(Dekanat::class,'dekanat_id','id');
    }
}
