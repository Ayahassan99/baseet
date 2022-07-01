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
<<<<<<< HEAD
            'userid',
            'workerid'=>$request->workerid

=======
            'userid'=>$request->userid
>>>>>>> db40118d43a0d331dce093a239715335dbbf8156
        ]);
        return back()-with('report','نعتذر عن المشكلة التى واجهتك تم استقبال مشكلتك وسيتم التعامل معها');
    }
}
