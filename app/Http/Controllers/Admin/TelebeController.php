<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TelebeController extends Controller
{
    public function index()
    {
        $students=User::role('tələbə')->get();
        return view('admin.pages.users.index',compact('students'));
    }
}
