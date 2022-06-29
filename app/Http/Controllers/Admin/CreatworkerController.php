<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;

class CreatworkerController extends Controller
{
    public function worker(){
        $workers = Worker::all();
        return view ('dashboard.admin.worker')->with([
            'workers' => $workers
        ]);
           
    }
    public function creatworker(){
        return view ('dashboard.admin.creatworker');
           
    }
    public function editworker(){
        return view ('dashboard.admin.edituser');
           
    }





    
}


