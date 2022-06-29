<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function worker(){
        $workers = Worker::all();
        return view ('dashboard.admin.worker')->with([
            'workers' => $workers
        ]);
           
    }
    public function user(){
        $users = User::all();
        return view ('dashboard.admin.user')->with([
            'users' => $users
        ]);
           
    }
    public function report(){
        return view ('dashboard.admin.report');
           
    }
    public function order(){
        return view ('dashboard.admin.order');
           
    }
    public function creatuser(){
        return view ('dashboard.admin.creatuser');
           
    }
    public function creatworker(){
        return view ('dashboard.admin.creatworker');
           
    }
   
    public function edituser(){
        return view ('dashboard.admin.edituser');
           
    }
    public function editworker(){
        return view ('dashboard.admin.editworker');
           
    }
}
