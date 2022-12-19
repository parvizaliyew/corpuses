<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Kafedra;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons=Lesson::with('getTeacher','getGroup')->paginate(10);
        return view('admin.pages.lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers=Teacher::get();
        $groups=Group::get();

        return view('admin.pages.lessons.create',compact('teachers','groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'muellim_id'=>$request->muellim_id,
            'qrup_id'=>$request->qrup_id
        ];
    
            $validator =Validator::make($data,[
                'name'=>'required',
                'muellim_id'=>'required',
                'qrup_id'=>'required',
            ],
            [
                'name.required'=>'Dərsi daxil edin',
                'muellim_id.required'=>'Müəllimi daxil edin',
                'qrup_id.required'=>'Qrupu daxil edin',

            ]);
    
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator);
            }
    
                $lesson=new Lesson;
                $lesson->name=$request->name;
                $lesson->muellim_id=$request->muellim_id;
                $lesson->qrup_id=$request->qrup_id;
                $lesson->save();
    
                toastr()->success('Dərsiniz uğurla əlavə olundu');
                return redirect()->route('admin.lesson.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson=Lesson::with('getTeacher','getGroup')->findOrFail($id);
        return view('admin.pages.lessons.show',compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers=Teacher::get();
        $groups=Group::get();
        $lesson=Lesson::findOrFail($id);
        return view('admin.pages.lessons.edit',compact('teachers','groups','lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=[
        'name'=>$request->name,
        ];

    $validator =Validator::make($data,[
        'name'=>'required',

    ],
    [
        'name.required'=>'Dərsi daxil edin',
    ]);

    if($validator->fails())
    {
        return redirect()->back()->withErrors($validator);
    }

        $lesson=Lesson::findOrFail($id);
        $lesson->name=$request->name;
        $lesson->muellim_id=$request->muellim_id;
        $lesson->qrup_id=$request->qrup_id;
        $lesson->save();

        toastr()->success('Dərsiniz uğurla yeniləndi');
        return redirect()->route('admin.lesson.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson=Lesson::findOrFail($id);
        $exam=Exam::where('lesson_id',$lesson->id)->update(
            [
                'lesson_id'=>0
            ]
        );        
        $lesson->delete();
        toastr()->success('Dərsiniz uğurla silindi');
        return redirect()->route('admin.lesson.index');
    }
}
