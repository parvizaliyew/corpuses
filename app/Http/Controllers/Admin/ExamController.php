<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use App\Models\User;
use App\Models\Group;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams=Exam::with('getUser','getLesson','getGroup')->paginate('10');

        return view('admin.pages.exams.index',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::whereHas('roles',function($q){
            return $q->where('name','tələbə');
        })->get();
        $lessons=Lesson::get();
        $groups=Group::get();
        return  view('admin.pages.exams.create',compact('lessons','users','groups'));
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
            'price'=>$request->price,
            'lesson_id'=>$request->lesson_id,
            'user_id'=>$request->user_id,
            'qrup_id'=>$request->qrup_id

        ];
    
            $validator =Validator::make($data,[
                'price'=>['required', 'integer', 'max:100', 'min:1'],
                'lesson_id'=>'required',
                'user_id'=>'required',
                'qrup_id'=>'required',
            ],
            [
                'price.required'=>'Balı daxil edin',
                'price.integer'=>'Bal rəqəm formatında olmalıdır',
                'price.min'=>'Bal 0-100 arasında daxil edin',
                'price.max'=>'Balı 0-100 arasında  daxil edin',
                'lesson_id.required'=>'Dərsi daxil edin',
                'qrup_id.required'=>'Qrupu daxil edin',
                'user_id.required'=>'Tələbəni daxil edin',

            ]);
    
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator);
            }
    
                $exam=new Exam;
                $exam->price=$request->price;
                $exam->lesson_id=$request->lesson_id;
                $exam->user_id=$request->user_id;
                $exam->qrup_id=$request->qrup_id;
                $exam->save();
    
                toastr()->success('İmtahani neticesi uğurla əlavə olundu');
                return redirect()->route('admin.exam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam=Exam::with('getUser','getLesson','getGroup')->findOrFail($id);
        return view('admin.pages.exams.show',compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam=Exam::findOrFail($id);
        $lessons=Lesson::get();
        $users=User::role('tələbə')->get();
        $groups=Group::get();
        return view('admin.pages.exams.edit',compact('lessons','users','exam','groups'));
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
            'price'=>$request->price,
            ];
    
        $validator =Validator::make($data,[
            'price'=>['required', 'integer', 'max:100', 'min:1'],
    
        ],
        [
            'price.required'=>'Balı daxil edin',
            'price.integer'=>'Bal rəqəm formatında olmalıdır',
            'price.min'=>'Bal 0-100 arasında daxil edin',
            'price.max'=>'Balı 0-100 arasında  daxil edin',        ]);
    
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
    
            $exam=Exam::findOrFail($id);
            $exam->price=$request->price;
            $exam->user_id=$request->user_id;
            $exam->lesson_id=$request->lesson_id;
            $exam->qrup_id=$request->qrup_id;

            $exam->save();
    
            toastr()->success('Imtahan balı uğurla yeniləndi');
            return redirect()->route('admin.exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam=Exam::findOrFail($id);
        $exam->delete();
        toastr()->success('İmtahan nəticəsi uğurla silindi');
        return redirect()->route('admin.exam.index');
    }
}
