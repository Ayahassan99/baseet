<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Worker\updateprofilerequest;


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
    public function editworker($id){
        $worker = Worker::where('id', $id)->first();
        return view('dashboard.admin.editworker')->with([
            'user' => $worker
        ]);
           
    }
    function create(Request $request){
        //Validate inputs
      $request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:workers,email',
          'password' => 'required|min:5|max:30',
          'cpassword' => 'required|min:5|max:30|same:password',
          'phone' => 'required|string',
          'city' => 'required|string',
          'region' => 'required|string',
          'gender' => 'required|string',
          'service' => 'required|string',
          'hour' => 'required|string',
          'photo' => '',
          'about' => 'required|string',
      ]);

      $worker = new Worker();
      $worker->name = $request->name;
      $worker->email = $request->email;
      $worker->password = \Hash::make($request->password);
      $worker->phone = $request->phone;
      $worker->city = $request->city;
      $worker->region = $request->region;
      $worker->gender = $request->gender;
      $worker->service = $request->service;
      $worker->hour = $request->hour;
      $worker->photo = $request->photo;
      $worker->about = $request->about;
      $save = $worker->save();

      if ($save) {
          return redirect()->back()->with('success', 'You are now registered successfully as worker');
      } else {
          return redirect()->back()->with('fail', 'Something went Wrong, failed to register');
      }
  }
    public function update(updateprofilerequest $request)
    {
        $worker = auth()->user();
        $worker->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            // 'password'=>$request->password,
            'city' => $request->city,
            'region' => $request->region,
            'service' => $request->service,
            'hour' => $request->hour,
            'photo' => $request->photo,
            'about' => $request->about,

        ]);

        return redirect()->route("admin.worker");

    }
    
}


