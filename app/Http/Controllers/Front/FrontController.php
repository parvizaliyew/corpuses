<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\Group;
use App\Models\Korpus;
use App\Models\Lesson;
use App\Models\Slider;
use App\Models\Dekanat;
use App\Models\Kafedra;
use App\Models\Message;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $sliders=Slider::orderBy('sort','ASC')->get();
        $about=About::first();
        $korpuss=Korpus::take(6)->orderBy('id','DESC')->get();
        $teachers=Teacher::with('getKafedra')->take(10)->get();
        return view('front.pages.index',compact('sliders','about','korpuss','teachers'));
    }

    public function about()
    {
        $about=About::first();
        return view('front.pages.about',compact('about'));
    }

    public function contact()
    {
        return view('front.pages.contact');
    }

    public function korpus()
    {
        $korpuss=Korpus::get();
        return view('front.pages.korpus',compact('korpuss'));
    }

    public function korpus_single($id)
    {
        $korpus=Korpus::with('dekanat')->findOrFail($id);
        $dekanats=Dekanat::where('korpus_id',$korpus->id)->select('name','id')->get();
        $kafedras_name=array();
        $kafedra_id=array();
        foreach($dekanats as $dekanat)
        {
            $kafedras=Kafedra::where('dekanat_id',$dekanat->id)->get();
            
            foreach($kafedras as $key=>$kafedra)
            {
                 $name= $kafedra->name;
                 $id=$kafedra->id;
                 array_push($kafedras_name,$name);
                 array_push($kafedra_id,$id);

            }


        }
        
        $teacher_name=array();
        $teacher_id=array();
        foreach($kafedra_id as $id)
        {
            $teachers=Teacher::where('kafedra_id',$id)->get();
            foreach($teachers as $key=>$teacher)
            {
                 $name= $teacher->name;
                 $id= $teacher->id;
                 array_push($teacher_name,$name);
                 array_push($teacher_id,$id);
            }
        }

        $lesson_name=array();
        foreach($teacher_id as $id)
        {
            $lessons=Lesson::where('muellim_id',$id)->get();
            foreach($lessons as $key=>$lesson)
            {
                 $name= $lesson->name;
                 array_push($lesson_name,$name);
            }
        }

        $group_name=array();
        foreach($kafedra_id as $id)
        {
            $groups=Group::where('kafedra_id',$id)->get();
            foreach($groups as $key=>$group)
            {
                 $name= $group->name;
                 array_push($group_name,$name);
            }
        }
        return view('front.pages.korpus_single',compact('korpus','dekanats','kafedras_name','teacher_name','lesson_name','group_name'));
    }

    public function contact_post(Request $request)
    {
        $message = new Message;
        $message->name    = $request->name;
        $message->email   = $request->email;
        $message->title   = $request->title;
        $message->msj     = $request->msj;

        $email = "emraheliyev2908@gmail.com";
        $title= 'Aviasiya saytindan mesaj var';

        $data = [
            'email'  => $request->email,
            'title'  => $request->title,
            'name'  => $request->name,
            'msj'  => $request->msj,
        ];
        Mail::send('mail.sendmail', $data, function($m) use ($title,$email) {
            $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
        });
        
            $message->save();
            toastr()->success('Mesajınız uğurla göndərildi');
            return redirect()->back();
    }
}
