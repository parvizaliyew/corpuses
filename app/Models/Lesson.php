<?php

namespace App\Models;

use App\Models\Group;
use App\Models\Teacher;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory, HasRoles;

    public function getTeacher()
    {
        return $this->belongsTo(Teacher::class,'muellim_id','id');
    }

    public function getGroup()
    {
        return $this->belongsTo(Group::class,'qrup_id','id');
    }
}
