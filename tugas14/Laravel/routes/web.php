<?php

use App\Http\Controllers\castcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get ('/cast', [castcontroller::class, 'index']);

route::get('cast/tambah', [castcontroller::class, 'create']);

route::POST('/cast', [castcontroller::class,'store']);

route::get('/cast/{cast_id}', [castcontroller::class,'show']);

route::get('/cast/{cast_id}/edit', [castcontroller::class,'edit']);

route::PUT('/cast/{cast_id}', [castcontroller::class,'update']);

route::delete('/cast/{cast_id}', [castcontroller::class,'destroy']);