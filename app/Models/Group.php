<?php

namespace App\Models;

use App\Models\Kafedra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    
    public function getKafedra()
    {
        return $this->belongsTo(Kafedra::class,'kafedra_id','id');
    }
}
