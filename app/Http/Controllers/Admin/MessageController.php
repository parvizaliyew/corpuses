<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages=Message::orderBy('created_at','DESC')->paginate(10);
        return view('admin.pages.message.index',compact('messages'));
    }

    public function show($id)
    {
        $message=Message::findOrFail($id);
        if($message->seen_message===null)
        {
            $message->seen_message=now()->addHours(4);
            $message->save();
        }
        return view('admin.pages.message.show',compact('message'));
    }
    
    public function delete($id)
    {
        $message=Message::findOrFail($id);
        $message->delete();
        toastr()->success('Mesajınz uğurla silindi');
        return redirect()->route('admin.mesaj.index');
    }
}
