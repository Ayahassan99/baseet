<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use DB;

class CreatuserController extends Controller
{
    public function user(){
        $users = User::all();
        return view ('dashboard.admin.user')->with([
            'users' => $users
        ]);
           
    }
    public function creatuser(){
        return view ('dashboard.admin.creatuser');
           
    }

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
            return redirect('admin/user');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
    }
    
   
    public function edituser(){
        return view ('dashboard.admin.edituser');
           
    }
    function delete($id){
        $delete = DB::table('users')
        ->where('id',$id)
        ->delete();
        return redirect('admin/user');
      }
    
}
