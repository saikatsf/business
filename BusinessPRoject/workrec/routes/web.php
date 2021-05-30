<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcon;

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
Route::view('/','homepage');
Route::view('header','header');
Route::view('footer','footer');
Route::view('insertrecord/{cid}','insertrecord');
Route::view('insertchallan','insertchallan');
Route::view('viewpage','viewpage');
Route::view('viewrecpage','viewrecpage');




Route::post('insertdata',[testcon::class,'insertdata']);
Route::get('cancel/{cid}',[testcon::class,'cancelNexit']);
Route::post('insertc',[testcon::class,'insertc']);
Route::get('viewc',[testcon::class,'viewc']);
Route::get('view/{cid}',[testcon::class,'view']);
Route::get('delete/{cid}',[testcon::class,'delete']);
Route::get('statchange/{cid}',[testcon::class,'statchange']);