<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfilController extends Controller
{
    
    public function edit()
    {
        return view('auth.profil_update');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'name'=>'required',
            'lname'=>'required'
        ],
        [
            'email.required'=>'Emailinizi daxil edin',
            'name.required'=>'Adınızı daxil edin',
            'lname.required'=>'Soyadınızı daxil edin',
            'email.email'=>'Emailinizi düzgün formatda deyil',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
            $user = User::find(auth()->user()->id);
            $user->update($request->all());
            if($request->has('reset_password')){
                if($request->reset_password=='')
                {
                    $user->name=$request->name;
                    $user->lname=$request->lname;
                    $user->email=$request->email;
                    $user->save();
                    toastr()->success('Profil məlumatlarınız yeniləndi');
                    return redirect()->back();
                }
                if($request->reset_password == $request->confirm_password){
                    $user->update([
                        'password'=>Hash::make($request->reset_password),
                    ]);
                }else{  
                    toastr()->warning('Parolunuzu təsdiqləyin');
                    return redirect()->back();
                }
            }
            toastr()->success('Profil məlumatlarınız yeniləndi');
            return redirect()->route('admin.index');
        }
    }

