<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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
// Langkah B - C (PRAKTIKUM)
Route::get('/hello', function () {
    return 'Hello World';
});

// Langkah D (PRAKTIKUM)
Route::get('/world', function () {
    return 'World';
   });

// Langkah F (PRAKTIKUM -  membuat route ’/’ yang menampilkan pesan ‘Selamat Datang’)
Route::get('/farhan', function () {
    return 'Selamat Datang';
});

// Langkah G (PRAKTIKUM -  buatlah route ‘/about’ yang akan menampilkan NIM dan nama Anda.)
Route::get('/about', function () {
    return '2141762138 FARHAN ASYAM ALFITRA';
});


// ROUTE PARAMETERS

// langkah A
Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

// Langkah D
Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Langkah F (buatlah route /articles/{id})
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
    });

// ROUTING PARAMETER DENGAN OPTIMAL PARAMETER

// langkah A - D
Route::get('/user/{name?}', function ($name='john') {
    return 'Nama saya '.$name;
});

// Langkah - Langkah Praktikum Membuat Controller

Route::get('/hello', [WelcomeController::class,'hello']);

// Langkah F
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

//RESOURCE CONTROLLER

// lANGKAH B
Route::resource('photos', PhotoController::class);

// Langkah D
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


// VIEW
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Farhan Asyam Alfitra']);
//     });


// View dalam Direktori
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Farhan Asyam A.']);
    });
    
// Menampilkan View dari Controller
Route::get('/greeting', [WelcomeController::class, 
'greeting']);

// Soal Praktikum





// Route::get('mahasiswa', function ($id) {
// });
// Route::post('mahasiswa', function ($id) {
// });
// Route::put('mahasiswa', function ($id) {
// });
// Route::delete('mahasiswa', function ($id) {
// });
// Route::get('mahasiswa/{id}', function ($id) {
// });
// Route::put('mahasiswa/{id}', function ($id) {
// });
// Route::delete('mahasiswa/{id}', function ($id) {
// });
// // next step
// Route::match(['get', 'post'], '/specialUrl', function () {
// });
// Route::any('/specialMahasiswa', function ($id) {
// });