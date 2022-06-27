<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function worker(){
        return view ('dashboard.admin.worker');
           
    }
    public function user(){
        return view ('dashboard.admin.user');
           
    }
    public function report(){
        return view ('dashboard.admin.report');
           
    }
    public function order(){
        return view ('dashboard.admin.order');
           
    }
}
