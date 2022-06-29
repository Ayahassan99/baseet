<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Creatworker extends Controller
{
    public function creatworker(){
        return view ('dashboard.admin.creatworker');
           
    }
    public function editworker(){
        return view ('dashboard.admin.edituser');
           
    }
}
