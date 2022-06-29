<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Worker\WorkerController;
use App\Http\Controllers\Worker\WorderController;
use App\Http\Controllers\User\UorderController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Admin\CreatworkerController;
use App\Http\Controllers\Admin\CreatuserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
Route::get('workers/{service}', [App\Http\Controllers\Worker\WorkerController::class, 'index'])->name('service-workers');//->middleware(['auth:web']);
Route::get('/report', [App\Http\Controllers\ReportController::class, 'report'])->name('report');
Route::post('/report', [App\Http\Controllers\ReportController::class, 'savereport'])->name('save.report');

Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });
    Route::get('/profile',[UserController::class,'profile'])->name('profile');

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
          Route::get('/profile',[UserController::class,'profile'])->name('profile');
          Route::get('/edit',[UserController::class,'edit'])->name('edit');
          Route::put('/update',[UserController::class,'update'])->name('update');
          Route::get('/uorder',[UorderController::class,'uorder'])->name('uorder');
         Route::get('/porder',[UorderController::class,'porder'])->name('porder');
         Route::get('/forder',[UorderController::class,'forder'])->name('forder');
         Route::get('/onorder',[UorderController::class,'onorder'])->name('onorder');
         Route::get('/corder',[UorderController::class,'corder'])->name('corder');
         Route::get('/rorder',[UorderController::class,'rorder'])->name('rorder');
        Route::prefix('order')->name('order.')->group(function() {
            Route::post('/create', [OrderController::class, 'create'])->name('create');
            Route::get('/list', [OrderController::class, 'index'])->name('index');
            Route::get('/{id}', [OrderController::class, 'show'])->name('show');
        });
    });

});

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        Route::get('/order',[CrudController::class,'order'])->name('order');
        Route::get('/worker',[CreatworkerController::class,'worker'])->name('worker');
        Route::get('/report',[CrudController::class,'report'])->name('report');
        Route::get('/user',[ CreatuserController::class,'user'])->name('user');
        Route::get('/creatuser',[ CreatuserController::class,'creatuser'])->name('creatuser');
        Route::get('/edituser',[ CreatuserController::class,'edituser'])->name('edituser');
        Route::put('/update',[CreatuserController::class,'update'])->name('update');
        Route::get('/creatworker',[CreatworkerController::class,'creatworker'])->name('creatworker');
        Route::get('/editworker/{id}',[CreatworkerController::class,'editworker'])->name('editworker');
        Route::put('/update',[CreatworkerController::class,'update'])->name('update');



    });

});
Route::prefix('worker')->name('worker.')->group(function(){

    Route::middleware(['guest:worker','PreventBackHistory'])->group(function(){
         Route::view('/login','dashboard.worker.login')->name('login');
         Route::view('/register','dashboard.worker.register')->name('register');
         Route::post('/create',[WorkerController::class,'create'])->name('create');
         Route::post('/check',[WorkerController::class,'check'])->name('check');
    });
    Route::get('/profile/{id?}',[WorkerController::class,'profile'])->name('profile');

    Route::middleware(['auth:worker','PreventBackHistory'])->group(function(){
         Route::view('/home','dashboard.worker.home')->name('home');
         Route::post('logout',[WorkerController::class,'logout'])->name('logout');
         Route::get('/add-new',[WorkerController::class,'add'])->name('add');
         Route::get('/edit',[WorkerController::class,'edit'])->name('edit');
         Route::put('/update',[WorkerController::class,'update'])->name('update');
         Route::get('/worder',[WorderController::class,'worder'])->name('worder');
         Route::get('/porder',[WorderController::class,'porder'])->name('porder');
         Route::get('/forder',[WorderController::class,'forder'])->name('forder');
         Route::get('/onorder',[WorderController::class,'onorder'])->name('onorder');
         Route::get('/corder',[WorderController::class,'corder'])->name('corder');
         Route::get('/rorder',[WorderController::class,'rorder'])->name('rorder');
        Route::prefix('order')->name('order.')->group(function() {
            Route::post('/create', [OrderController::class, 'create'])->name('create');
            Route::get('/list', [OrderController::class, 'index'])->name('index');
            Route::get('/{id}', [OrderController::class, 'show'])->name('show');
        });
    });

});

