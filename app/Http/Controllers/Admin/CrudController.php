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
    
    public function report(){
        return view ('dashboard.admin.report');
           
    }
    public function order(){
        return view ('dashboard.admin.order');
           
    }
   
    
}
