<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        return view('admin.pages.setting.index',compact('setting'));
    }
    public function update(Request $request , $id)
    {
        $data=[
            'email'=>$request->email,
            'foot_desc'=>$request->foot_desc,
            'number'=>$request->number,
            'adress'=>$request->adress,
            'ins'=>$request->ins,
            'fb'=>$request->fb,
            'tw'=>$request->tw,
            'ln'=>$request->ln,

        ];

        $validator =Validator::make($data,
        [
            'email'=>'required',
            'foot_desc'=>'required',
            'number'=>'required',
            'adress'=>'required',
            'ins'=>'required',
            'fb'=>'required',
            'tw'=>'required',
            'ln'=>'required',
        ],
        [
            'email.required'=>'Emaili daxil edin',
            'foot_desc.required'=>'Footer-i daxil edin',
            'number.required'=>'Nömrəni daxil edin',
            'adress.required'=>'Ünvanı daxil edin',
            'ins.required'=>'İnstagramı daxil edin',
            'fb.required'=>'Facebooku daxil edin',
            'tw.required'=>'Twitteri daxil edin',
            'ln.required'=>'Linkedini  daxil edin',

        ]);

       if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        
        $setting=Setting::findOrFail($id);

            $setting->email=$request->email;
            $setting->number=$request->number;
            $setting->foot_desc=$request->foot_desc;
            $setting->adress=$request->adress;
            $setting->ins=$request->ins;
            $setting->fb=$request->fb;
            $setting->tw=$request->tw  ;
            $setting->ln=$request->ln  ;

            $setting->save();

            toastr()->success('Ayarlarınız  uğurla yenilendi');
            return redirect()->route('admin.setting.index');
    }

}
