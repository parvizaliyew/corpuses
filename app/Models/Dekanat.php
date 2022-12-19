<?php

namespace App\Models;

use App\Models\Kafedra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dekanat extends Model
{
    use HasFactory;

    public function getKorpus()
    {
        return $this->belongsTo(Korpus::class,'korpus_id','id');
    }
}
