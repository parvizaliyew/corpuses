<?php

namespace App\Http\Controllers\Admin;

use App\Models\Korpus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class KorpusController extends Controller
{
    public function index()
    {
        $korpus=Korpus::paginate(4);
        return view('admin.pages.korpus.index',compact('korpus'));
    }

    public function create()
    {
        return view('admin.pages.korpus.create');
    }

    public function store(Request $request)
    {
        $data=[
            'title'=>$request->title,
            'name'=>$request->name,
            'desc'=>$request->desc,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,[
            'title'=>'required',
            'name'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png',
        ],
        [
            'title.required'=>'Başlığı daxil edin',
            'name.required'=>'Korpus adi daxil edin',
            'desc.required'=>'Mətni daxil edin',
            'img.required'=>'Şəkili daxil edin',
            'img.mimes'=>'Şəkil png jpg formatında olmalıdı',

        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/korpus/'.$fileName;

            $request->img->storeAs('public/korpus/',$fileName);

            $korpus=new Korpus;
            $korpus->img=$fileNameWithUpload;
            $korpus->title=$request->title;
            $korpus->name=$request->name;
            $korpus->desc=$request->desc;
            $korpus->save();

            toastr()->success('Korpusunuz uğurla əlavə olundu');
            return redirect()->route('admin.korpus.index');
        }
    }

    public function show($id)
    {
        $korpus=Korpus::findOrFail($id);

        return view('admin.pages.korpus.show',compact('korpus'));
    }

    public function edit($id)
    {
        $korpus=Korpus::findOrFail($id);

        return view('admin.pages.korpus.edit',compact('korpus'));
    }

    public function update(Request $request, $id)
    {
        $data=[
            'title'=>$request->title,
            'name'=>$request->name,
            'desc'=>$request->desc,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,
        [
            'title'=>'required',
            'name'=>'required',
            'desc'=>'required',

        ],
        [
            'title.required'=>'Başlığı daxil edin',
            'name.required'=>'Adı daxil edin',
            'desc.required'=>'Mətni daxil edin',

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

        $korpus=korpus::findOrFail($id);

        if($request->has('img')==null)
        {
            $korpus->title=$request->title;
            $korpus->name=$request->name;
            $korpus->desc=$request->desc;
            $korpus->save();

            toastr()->success('Korpusunuz uğurla yenilendi');
            return redirect()->route('admin.korpus.index');
        }
        else
        {
            if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }
            
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/korpus/'.$fileName;
            if(File::exists($korpus->img))
            {
                File::delete($korpus->img);
            }
            $request->img->storeAs('public/korpus/',$fileName);

            $korpus->img=$fileNameWithUpload;
            $korpus->title=$request->title;
            $korpus->name=$request->name;
            $korpus->desc=$request->desc;
            $korpus->save();

            toastr()->success('Korpusunuz uğurla yenilendi');
            return redirect()->route('admin.korpus.index');
        }
    }
    public function delete($id)
    {
        $korpus=Korpus::findOrFail($id);
        if(File::exists($korpus->img))
            {
                File::delete($korpus->img);
            }
        $korpus->delete();
        toastr()->success('Korpusunuz uğurla silindi');
        return redirect()->route('admin.korpus.index');
    }

}
