<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {
        $sliders=Slider::orderBy('sort','ASC')->paginate(10);
        return view('admin.pages.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('admin.pages.slider.create');
    }
    
    public function store(Request $request)
    {
        $data=[
            'title'=>$request->title,
            'desc'=>$request->desc,
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png',
        ],
        [
            'title.required'=>'Başlığı daxil edin',
            'desc.required'=>'Mətni daxil edin',
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
            $fileNameWithUpload='storage/sliders/'.$fileName;

            $request->img->storeAs('public/sliders/',$fileName);

            $slider=new Slider;
            $slider->img=$fileNameWithUpload;
            $slider->title=$request->title;
            $slider->desc=$request->desc;
            $slider->save();

            toastr()->success('Slayderiniz uğurla əlavə olundu');
            return redirect()->route('admin.slider.index');
        }
    }

    public function show($id)
    {
        $slider=Slider::findOrFail($id);

        return view('admin.pages.slider.show',compact('slider'));
    }

    public function edit($id)
    {
        $slider=Slider::findOrFail($id);

        return view('admin.pages.slider.edit',compact('slider'));
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

        $slider=Slider::findOrFail($id);

        if($request->has('img')==null)
        {
            $slider->title=$request->title;
            $slider->desc=$request->desc;
            $slider->save();

            toastr()->success('Slayderiniz uğurla yenilendi');
            return redirect()->route('admin.slider.index');
        }
        else
        {
            if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }
            
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/sliders/'.$fileName;
            if(File::exists($slider->img))
            {
                File::delete($slider->img);
            }
            $request->img->storeAs('public/sliders/',$fileName);

            $slider->img=$fileNameWithUpload;
            $slider->title=$request->title;
            $slider->desc=$request->desc;
            $slider->save();

            toastr()->success('Slayderiniz uğurla yenilendi');
            return redirect()->route('admin.slider.index');
        }
    }

    public function delete($id)
    {
        $slider=Slider::findOrFail($id);
        if(File::exists($slider->img))
            {
                File::delete($slider->img);
            }
        $slider->delete();
        toastr()->success('Slayderiniz uğurla silindi');
        return redirect()->route('admin.slider.index');
    }

    public function sort(Request $request)
    {
        foreach ($request->sorts as $key => $sort) {
            $slider=Slider::where('id',$sort)->first();

            $slider->sort=$key;

            $slider->save();
        }
    }
}
