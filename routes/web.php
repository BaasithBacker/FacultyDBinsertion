<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;
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

Route::get('/', [FacultyController::class,'create']);

Route::get('/student',[StudentController::class,'create']);

route::get('/busadd',[BusController::class,'create']);

route::post('/facultyread',[FacultyController::class,'store']);

route::post('/studentread',[StudentController::class,'store']);

route::post('/busread',[BusController::class,'store']);

route::get('/bookadd',[BookController::class,'create']);

route::post('/bookread',[BookController::class,'store']);

route::get('/facultyview',[FacultyController::class,'index']);

route::get('/studentview',[StudentController::class,'index']);

route::get('/busview',[BusController::class,'index']);

route::post('/facultysearch',[FacultyController::class,'search']);

route::post('/studentsearch',[StudentController::class,'search']);

route::get('/facultyedit/{id}',[FacultyController::class,'edit']);

route::post('/facultyupdate/{id}',[FacultyController::class,'update']);