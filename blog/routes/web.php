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
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    \Log::info('GET');
    \Log::info($request->all());
    return $request->all();
    //return view('welcome');
});
Route::post('/', function (Request $request) {
    \Log::info('POST');
    \Log::info($request->all());
    return $request->all();
});
