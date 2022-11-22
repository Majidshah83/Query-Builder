<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\JoinController;
use Illuminate\Database\Query\JoinClause;

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
route::get('getstudent',[StudentController::class,'getstudent']);
route::get('getjoin',[JoinController::class,'join']);
route::get('leftJoin',[JoinController::class,'leftJoin']);