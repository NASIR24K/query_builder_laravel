<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\AggregateCOntroller;
use App\Http\Controllers\Select_Controller;
use App\Http\Controllers\marge_COntroller;
use App\Http\Controllers\Join_COntroller;
use App\Http\Controllers\Insert_controller;
use App\Http\Controllers\Delete_Controller;
use App\Http\Controllers\Update_Controller;

Route::get('/', [RetriveController::class, 'AllData']);
//Route::get('/', [RetriveController::class, 'selectOneRow']);

///''''''''''''Aggregate.....................
Route::get('/', [AggregateCOntroller::class, 'countRow']);
Route::get('/max', [AggregateCOntroller::class, 'MaxRow']);
Route::get('/min', [AggregateCOntroller::class, 'MInRow']);
Route::get('/avg', [AggregateCOntroller::class, 'avgRow']);
////...............query Select...............
Route::get('/select', [Select_Controller::class, 'UniqueCulumn']);
Route::get('/single', [Select_Controller::class, 'SingleCulumn']);
Route::get('/multi', [Select_Controller::class, 'MultiCulumn']);

///....................merge Builder..............////////////////
Route::get('/merge', [marge_COntroller::class, 'margeData']);
///..............Left&Right join...................////////p
Route::get('/leftjoin', [Join_COntroller::class, 'LeftJoinData']);
Route::get('/rightjoin', [Join_COntroller::class, 'RightJoinData']);
////////................Insert..................
Route::get('/insertto', [Insert_controller::class, 'InsertRow']);
Route::get('/muliinsert', [Insert_controller::class, 'multiInsert']);
Route::get('/dup', [Insert_controller::class, 'InsertOrIg']);
////...........delete builder..........//////////////////////
Route::get('/singlerow', [Delete_Controller::class, 'OneRowDelete']);
Route::get('/notdalete', [Delete_Controller::class, 'withoutPriDelete']);
Route::get('/alldelete', [Delete_Controller::class, 'truncatDelete']);
////.............update builder....//////////////////
Route::get('/update', [Update_Controller::class, 'updateData']);
