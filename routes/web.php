<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
 });

Route::get('/world', function () {
    return 'World';
 });

Route::get('/welcome', function () {
    return 'Selamat Datang';
 });
 
 Route::get('/about', function () {
    return '2341760059 <br> Nindya Shafira Putri';
 });

 Route::get('/user/{nindya}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($Id) {
    return "Halaman Artikel dengan ID $Id";
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });
    
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
