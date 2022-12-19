<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function sign_up()
    {
        $groups=Group::get();
        return view('auth.register',compact('groups'));
    }

    public function signup_post(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'lname'=>$request->name,
            'email'=>$request->email,
            'group_id'=>$request->group_id,
            'password'=>$request->password,
            'password_ver'=>$request->password_ver,

        ];

        $validator =Validator::make($data,
        [
            'name'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'group_id'=>'required',
            'password_ver'=>'required',
        ],
        [
            'email.required'=>'Emailinizi daxil edin',
            'name.required'=>'Adınızı daxil edin',
            'lname.required'=>'Soyadınızı daxil edin',
            'email.email'=>'Emailinizi düzgün formatda deyil',
            'password.required'=>'Şifrənizi daxil edin',
            'password_ver.required'=>'Şifrənizi daxil edin',
            'group_id.required'=>'Qrupunuzu daxil edin',

        ]);

        if ($validator->fails()) {
            toastr()->warning('Parolunuzu təsdiqləyin');

            return redirect()->back()->withErrors($validator);
        }

        if($request->password==$request->password_ver)
        {
            $user = new User;
            $user->name=$request->name;
            $user->lname=$request->lname;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->group_id=$request->group_id;
            $user->save();
            $user->assignRole('tələbə');
            toastr()->success('Uğurla qeydiyyatdan kecdiniz');
            return redirect()->route('index');
        }
        else
        {
            toastr()->warning('Parolunuzu təsdiqləyin');
            return redirect()->back();
        }
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login_post(Request $request)
    {
            $data= [
                'email'=>$request->email,
                'password'=>$request->password,

            ];

            $validator =Validator::make($data,[
            'email'=>'required|email',
            'password'=>'required',
            ]);

            if($validator->fails())
            {
                toastr()->error('Zəhmət olmasa bütün xanaları doldurun.');
                return redirect()->back();
            }

            if (Auth::attempt($data))
            {
            toastr()->success('Uğurla giriş etdiniz.');
            return redirect()->route('admin.index');
            }
            
            else
            {
                toastr()->error('İstifadəçi məlumatları doğru deyil.');
                return redirect()->back();
            }
    }

        public function logout()
        {
            Auth::logout();

            return redirect()->route('index');
    }
}
