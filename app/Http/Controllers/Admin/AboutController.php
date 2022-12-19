<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::first();
        return view('admin.pages.about.index',compact('about'));
    }

    public function update(Request $request, $id)
    {
        $data=[
            'title'=>$request->title,
            'desc'=>$request->desc,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,
        [
            'title'=>'required',
            'desc'=>'required',

        ],
        [
            'title.required'=>'Başlığı daxil edin',
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

        
        $about=About::findOrFail($id);

        if($request->has('img')==null)
        {
            $about->title=$request->title;
            $about->desc=$request->desc;
            $about->save();

            toastr()->success('Slayderiniz uğurla yenilendi');
            return redirect()->route('admin.about');
        }
        if($request->has('img')!=null)
        {
            if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/abouts/'.$fileName;
            if(File::exists($about->img))
            {
                File::delete($about->img);
            }
            $request->img->storeAs('public/abouts/',$fileName);

            $about->img=$fileNameWithUpload;
            $about->title=$request->title;
            $about->desc=$request->desc;
            $about->save();

            toastr()->success('Haqqınızda uğurla yenilendi');
            return redirect()->route('admin.about');
        }
    }
}
