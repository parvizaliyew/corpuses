<?php

namespace App\Models;

use App\Models\User;
use App\Models\Group;
use App\Models\Lesson;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory, HasRoles;

    public function getLesson()
    {
        return $this->belongsTo(Lesson::class,'lesson_id','id');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getGroup()
    {
        return $this->belongsTo(Group::class,'qrup_id','id');
    }
}
