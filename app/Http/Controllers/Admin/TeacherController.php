<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use App\Models\Kafedra;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::with('getKafedra')->paginate(4);
        return view('admin.pages.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kafedras=Kafedra::get();
        return view('admin.pages.teacher.create',compact('kafedras'));
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
            'surname'=>$request->surname,
            'kafedra_id'=>$request->kafedra_id,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,[
            'name'=>'required',
            'surname'=>'required',
            'kafedra_id'=>'required',
            'img'=>'required|mimes:jpg,png',
        ],
        [
            'name.required'=>'Adı daxil edin',
            'surname.required'=>'Soyadı  daxil edin',
            'kafedra_id.required'=>'Kafedranı  daxil edin',

            'img.required'=>'Şəkili daxil edin',
            'img.mimes'=>'Şəkil png jpg formatinda olmalidi',

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/teachers/'.$fileName;

            $request->img->storeAs('public/teachers/',$fileName);

            $teacher=new Teacher;
            $teacher->img=$fileNameWithUpload;
            $teacher->name=$request->name;
            $teacher->kafedra_id=$request->kafedra_id;
            $teacher->surname=$request->surname;
            $teacher->save();

            toastr()->success('Müəlliminiz uğurla əlavə olundu');
            return redirect()->route('admin.teacher.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher=Teacher::with('getKafedra')->findOrFail($id);
        return view('admin.pages.teacher.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kafedras=Kafedra::get();
        $teacher=Teacher::with('getKafedra')->findOrFail($id);
        return view('admin.pages.teacher.edit',compact('teacher','kafedras'));

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
            'surname'=>$request->surname,
            'img'=>$request->img,
            'kafedra_id'=>$request->kafedra_id,
        ];

        $validator =Validator::make($data,
        [
            'name'=>'required',
            'surname'=>'required',

        ],
        [
            'name.required'=>'Adı daxil edin',
            'surname.required'=>'Soyadı daxil edin',

        ]);

        $validate=Validator::make( $data,[
            'img'=>'mimes:jpg,png',
        ],
        [
            'img.mimes'=>'Şəkil png , jpg formatinda olmalidi',
        ]);

        
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        $teacher=Teacher::findOrFail($id);

        if($request->has('img')==null)
        {
            $teacher->name=$request->name;
            $teacher->surname=$request->surname;
            $teacher->kafedra_id=$request->kafedra_id;
            $teacher->save();

            toastr()->success('Müəlliminiz uğurla yenilendi');
            return redirect()->route('admin.teacher.index');
        }
        else
        {
            if($validate->fails())  
        {
            return redirect()->back()->withErrors($validate);
        }
            
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/teachers/'.$fileName;
            if(File::exists($teacher->img))
            {
                File::delete($teacher->img);
            }
            $request->img->storeAs('public/teachers/',$fileName);

            $teacher->img=$fileNameWithUpload;
            $teacher->name=$request->name;
            $teacher->surname=$request->surname;
            $teacher->kafedra_id=$request->kafedra_id;
            $teacher->save();

            toastr()->success('Müəlliminiz uğurla yenilendi');
            return redirect()->route('admin.teacher.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::findOrFail($id);

        $lesson=Lesson::where('muellim_id',$teacher->id)->update(
            [
                'muellim_id'=>0
            ]
        );
        if(File::exists($teacher->img))
            {
                File::delete($teacher->img);
            }
        $teacher->delete();
        toastr()->success('Müəlliminiz uğurla silindi');
        return redirect()->route('admin.teacher.index');
    }
}
