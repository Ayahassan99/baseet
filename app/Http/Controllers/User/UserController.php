<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\updateprofilerequest;


class UserController extends Controller
{
    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password',
            'phone'=>'required|string',
             'city'=>'required|string',
             'region'=>'required|string',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->phone = $request->phone;
          $user->city = $request->city;
          $user->region = $request->region;
        $save = $user->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }
    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);
        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect('/');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
    public function profile(){
        $user = auth()->user();
        return view ('dashboard.user.profile')->with([
            'user' => $user
        ]);
    }
    public function edit(){
        $user = auth()->user();
        return view ('dashboard.user.edit')->with([
            'user' => $user
        ]);
    }


    public function update(updateprofilerequest $request) {
        $user = auth()->user();
        $user->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        // 'password'=>$request->password,
        'city'=>$request->city,
        'region'=>$request->region,
        ]);
        return redirect('/user/profile');   
    }
}
   

        


