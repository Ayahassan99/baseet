<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Worker\updateprofilerequest;

class WorkerController extends Controller
{

    function index(Request $request, $service)
    {
        $city = $request->query->get('city');
        $name = $request->query->get('name');
        $workers = Worker::where('service', $service)->where('city', $city)->where('name', 'like', "%$name%")
            ->get();
        return view("workers")->with(['workers' => $workers]);
    }
    function search(Request $request)
    {
        $name = $request->query->get('name');
        $workers = Worker::where('name', 'like', "%$name%")
            ->get();
        return view("workers")->with(['workers' => $workers]);
    }
    function create(Request $request)
    {
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

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:workers,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in worker table'
        ]);

        $creds = $request->only('email', 'password');
        if (Auth::guard('worker')->attempt($creds, 1)) {
            return redirect('/');
        } else {
            return redirect()->route('worker.login')->with('fail', 'Incorrect Credentials');
        }
    }

    function logout()
    {
        Auth::guard('worker')->logout();
        return redirect('/');
    }
    public function profile($id = 0)
    {
        if ($id == 0) {
            $worker = Auth::guard('worker')->user();
            $showMyProfile = true;
        } else {
            $worker = Worker::find($id);
            $showMyProfile = false;
        }
        return view('dashboard.worker.profile')->with([
            'user' => $worker,
            'showMyProfile' => $showMyProfile
        ]);
    }
    public function edit()
    {
        $worker = auth()->user();
        return view('dashboard.worker.edit')->with([
            'user' => $worker
        ]);
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
        return redirect('/worker/profile');
    }
}
