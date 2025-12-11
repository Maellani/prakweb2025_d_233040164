<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\CategoryController;

// contoh route untuk menampilkan view
Route::get('/', function () {
    return view('welcome');
});

// Route untuk memanggil method di PostController
Route::get('posts', [PostController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);