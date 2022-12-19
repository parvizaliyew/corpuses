<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Models\Dekanat;
use App\Models\Kafedra;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KafedraController extends Controller
{
    public function index()
    {
        $kafedras=Kafedra::with('getDekanat')->paginate(5);
        return view('admin.pages.kafedra.index',compact('kafedras'));
    }
    public function create()
    {
        $dekanats=Dekanat::get();
        return view('admin.pages.kafedra.create',compact('dekanats'));
    }

    public function store(Request $request)
    {
        $data=[
        'name'=>$request->name,
        'dekanat_id'=>$request->dekanat_id
    ];

        $validator =Validator::make($data,[
            'name'=>'required',
            'dekanat_id'=>'required',
        ],
        [
            'name.required'=>'Adı daxil edin',
            'dekanat_id.required'=>'Dekanatlığı daxil edin',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

            $kafedra=new Kafedra;
            $kafedra->name=$request->name;
            $kafedra->dekanat_id=$request->dekanat_id;
            $kafedra->save();

            toastr()->success('Kafedranız uğurla əlavə olundu');
            return redirect()->route('admin.kafedra.index');
        
    }

    public function show($id)
    {
        $kafedra=Kafedra::with('getDekanat')->findOrFail($id);
        return view('admin.pages.kafedra.show',compact('kafedra'));
    }

    public function edit($id)
    {
        $dekanats=Dekanat::get();
        $kafedra=Kafedra::findOrFail($id);
        return view('admin.pages.kafedra.edit',compact('kafedra','dekanats'));
    }

    public function update(Request $request ,$id)
    {
        $data=['name'=>$request->name,
        ];

        $validator =Validator::make($data,[
            'name'=>'required',

        ],
        [
            'name.required'=>'Adı daxil edin',

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

            $kafedra=Kafedra::findOrFail($id);
            $kafedra->name=$request->name;
            $kafedra->dekanat_id=$request->dekanat_id;
            $kafedra->save();

            toastr()->success('Kafedranız uğurla yeniləndi');
            return redirect()->route('admin.kafedra.index');
        
    }

    public function delete($id)
    {
        $kafedra=Kafedra::findOrFail($id);
        $teacher=Teacher::where('kafedra_id',$kafedra->id)->update([
            'kafedra_id'=>0
        ]);
        $group=Group::where('kafedra_id',$kafedra->id)->update([
            'kafedra_id'=>0
        ]);
        
        
        
        $kafedra->delete();
        toastr()->success('Kafedranız uğurla silindi');
        return redirect()->route('admin.kafedra.index');
    }
}
