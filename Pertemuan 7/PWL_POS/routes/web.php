<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\VisualizationController;

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

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login', 'Auth\LoginController@login')->name('login');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'auth'], function () {
    // Menampilkan form login
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    // Melakukan proses login
    Route::post('login', [AuthController::class, 'login']);

    // Menampilkan form pendaftaran
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    // Melakukan proses pendaftaran
    Route::post('register', [RegisterController::class, 'register']);

    // Rute logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [WelcomeController::class, 'index']);
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::post('/list', [UserController::class, 'list']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::put('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);
    });
    
    Route::group(['prefix' => 'level'], function () {
        Route::get('/', [LevelController::class, 'index']);
        Route::post('/list', [LevelController::class, 'list']);
        Route::get('/create', [LevelController::class, 'create']);
        Route::post('/', [LevelController::class, 'store']);
        Route::get('/{id}', [LevelController::class, 'show']);
        Route::get('/{id}/edit', [LevelController::class, 'edit']);
        Route::put('/{id}', [LevelController::class, 'update']);
        Route::delete('/{id}', [LevelController::class, 'destroy']);
    });
    
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, 'index']);
        Route::post('/list', [CategoryController::class, 'list']);
        Route::get('/create', [CategoryController::class, 'create']);
        Route::post('/', [CategoryController::class, 'store']);
        Route::get('/{id}', [CategoryController::class, 'show']);
        Route::get('/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('/{id}', [CategoryController::class, 'update']);
        Route::delete('/{id}', [CategoryController::class, 'destroy']);
    });
    
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::post('/list', [ProductController::class, 'list']);
        Route::get('/create', [ProductController::class, 'create']);
        Route::post('/', [ProductController::class, 'store']);
        Route::get('/{id}', [ProductController::class, 'show']);
        Route::get('/{id}/edit', [ProductController::class, 'edit']);
        Route::put('/{id}', [ProductController::class, 'update']);
        Route::delete('/{id}', [ProductController::class, 'destroy']);
    });
    
    Route::group(['prefix' => 'stok'], function () {
        Route::get('/', [StokController::class, 'index'])->name('stok');
        Route::get('/list', [StokController::class, 'list']);
        Route::get('/create', [StokController::class, 'create']);
        Route::post('/', [StokController::class, 'store']);
        Route::get('/{id}', [StokController::class, 'show']);
        Route::get('/{id}/edit', [StokController::class, 'edit']);
        Route::put('/{id}', [StokController::class, 'update']);
        Route::delete('/{id}', [StokController::class, 'destroy']);
    });
    
    Route::group(['prefix' => 'penjualan'], function () {
        Route::get('/', [PenjualanController::class, 'index']);
        Route::post('/list', [PenjualanController::class, 'list']);
        Route::get('/create', [PenjualanController::class, 'create']);
        Route::post('/', [PenjualanController::class, 'store']);
        Route::get('/{id}', [PenjualanController::class, 'show']);
        Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
        Route::put('/{id}', [PenjualanController::class, 'update']);
        Route::delete('/{id}', [PenjualanController::class, 'destroy']);
    });
    
    Route::get('registration-chart', [VisualizationController::class, 'showRegistrationChart']);
    
    Route::group(['prefix' => 'gambar'], function () {
        Route::get('/', [GambarController::class, 'index'])->name('gambar.index');
        Route::post('/list', [GambarController::class, 'list'])->name('gambar.list');
        Route::get('/create', [GambarController::class, 'create'])->name('gambar.create');
        Route::post('/', [GambarController::class, 'store'])->name('gambar.store');
        Route::get('/{id}', [GambarController::class, 'show'])->name('gambar.show');
        Route::get('/{id}/edit', [GambarController::class, 'edit'])->name('gambar.edit');
        Route::put('/{id}', [GambarController::class, 'update'])->name('gambar.update');
        Route::delete('/{id}', [GambarController::class, 'destroy'])->name('gambar.destroy');
    });
});


















// Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('login', [AuthController::class, 'login']);
// Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [AuthController::class, 'register']);
// use App\Http\Controllers\AuthController;

// Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);


