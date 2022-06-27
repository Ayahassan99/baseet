<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UorderController extends Controller
{
    public function order(){
        return view ('dashboard.user.uorder');
           
    }
    public function porder(){
        return view ('dashboard.user.porder');
           
    }
    public function forder(){
        return view ('dashboard.user.forder');
           
    }
    public function onorder(){
        return view ('dashboard.user.onorder');
           
    }
    public function corder(){
        return view ('dashboard.user.corder');
           
    }
    public function rorder(){
        return view ('dashboard.user.rorder');
           
    }

}
