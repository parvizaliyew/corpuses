<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use App\Models\User;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Kafedra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=Group::with('getKafedra')->paginate(5);
        return view('admin.pages.groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kafedras=Kafedra::get();
        return view('admin.pages.groups.create',compact('kafedras'));
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
            'kafedra_id'=>$request->kafedra_id
        ];
    
            $validator =Validator::make($data,[
                'name'=>'required',
                'kafedra_id'=>'required',
            ],
            [
                'name.required'=>'Qrupu daxil edin',
                'kafedra_id.required'=>'Kafedranı daxil edin',
            ]);
    
            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator);
            }
    
                $group=new Group;
                $group->name=$request->name;
                $group->kafedra_id=$request->kafedra_id;
                $group->save();
    
                toastr()->success('Qrupunuz uğurla əlavə olundu');
                return redirect()->route('admin.group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group=Group::with('getKafedra')->findOrFail($id);
        return view('admin.pages.groups.show',compact('group'));
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
        $group=Group::findOrFail($id);
        return view('admin.pages.groups.edit',compact('kafedras','group'));
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
        $data=['name'=>$request->name,
        ];

        $validator =Validator::make($data,[
            'name'=>'required',

        ],
        [
            'name.required'=>'Qrupu daxil edin',

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

            $group=Group::findOrFail($id);
            $group->name=$request->name;
            $group->kafedra_id=$request->kafedra_id;
            $group->save();

            toastr()->success('Qrupunuz uğurla yeniləndi');
            return redirect()->route('admin.group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group=Group::findOrFail($id);
        $lesson=Lesson::where('qrup_id',$group->id)->update(
            [
                'qrup_id'=>0
            ]
        );
        $exam=Exam::where('qrup_id',$group->id)->update(
            [
                'qrup_id'=>0
            ]
        );
        ;
        $group->delete();
        toastr()->success('Qrupunuz uğurla silindi');
        return redirect()->route('admin.group.index');
    }
}
