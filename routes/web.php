<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UploadController;
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


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('register');
});

Route::get('/upload',[UploadController::class,'upload']);
Route::post('/uploadproduct',[UploadController::class,'store']);

Route::get('/show',[UploadController::class,'show']);
Route::get('/download/{file}',[UploadController::class,'download']);
Route::get('/view/{id}',[UploadController::class,'view']);



Route::view('registration','registration');
Route::get('/register',[UserController::class,'login']);
Route::post('/registration',[UserController::class,'registration']);
Route::post('/login',[UserController::class,'getdata']);
Route::get('/product',[productController::class,'index']);
Route::get('/detail/{id}',[productController::class,'detail']);
// Route::get('/d',[productController::class,'details']);
Route::get('/search',[productController::class,'search']);
Route::get('/add_to_card',[productController::class,'addtocard']);
Route::get('/cartlist',[productController::class,'cartlist']);
Route::get('/removecart/{id}',[productController::class,'removeCart']);
Route::get('/ordernow',[productController::class,'ordernow']);
Route::get('/orderplace',[productController::class,'orderplace']);
Route::get('/myorders',[productController::class,'myorders']);