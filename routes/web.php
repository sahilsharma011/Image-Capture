<?php

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

use Illuminate\Support\Facades\Storage;

Route::get('/', function (\Illuminate\Http\Request $request) {
    return view('capture');
});

Route::post('/', function (\Illuminate\Http\Request $request) {
    Storage::disk('local')->putFileAs('images',$request->file('file'),$request->ip().'_'.strtotime('now').'.png');
});

