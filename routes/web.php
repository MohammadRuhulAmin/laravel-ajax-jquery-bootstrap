<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function(){
    return view('index');
});

Route::post('/index/student/insert/',[StudentController::class,'store']);
Route::get('/index/student/list/',[StudentController::class,'index']);