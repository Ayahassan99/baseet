<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorderController extends Controller
{
    public function order(){
        return view ('dashboard.worker.worder');
           
    }
    public function porder(){
        return view ('dashboard.worker.porder');
           
    }
    public function forder(){
        return view ('dashboard.worker.forder');
           
    }
    public function onorder(){
        return view ('dashboard.worker.onorder');
           
    }
    public function corder(){
        return view ('dashboard.worker.corder');
           
    }
    public function rorder(){
        return view ('dashboard.worker.rorder');
           
    }

}
