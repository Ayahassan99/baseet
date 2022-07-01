<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReportController extends Controller
{
    public function report()
    {
        return view('report');
    }
    public function savereport(Request $request)
    {
        DB::table('reports')->insert([
            'text'=>$request->text,
            'userid',
            'workerid'=>$request->workerid

        ]);
        return back()-with('report','نعتذر عن المشكلة التى واجهتك تم استقبال مشكلتك وسيتم التعامل معها');
    }
}
