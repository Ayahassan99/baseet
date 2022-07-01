<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
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
    
   
    public function edituser(){
        return view ('dashboard.admin.edituser');
           
    }
    
}
