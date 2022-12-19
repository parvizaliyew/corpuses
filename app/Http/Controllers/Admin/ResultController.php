<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index()
    {
       $group_id=Auth::user()->group_id;
       $exams=Exam::where('qrup_id',$group_id)->with('getUser','getLesson','getGroup')->get();

       return view('admin.pages.result.index',compact('exams'));
    }
}
