<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;

use App\Models\Post;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/authors/{author:username}', [AuthorController::class, 'index']);

Route::controller(PostController::class)->group(function(){
      Route::get('/posts', 'index');
      Route::get('/posts/{post:slug}', 'show'); //Single Post
});

Route::controller(CategoryController::class)->group(function(){
      Route::get('/categories', 'index');
      Route::get('/categories/{category:slug}', 'posts');
});

Route::controller(RegisterController::class)->group(function(){
      Route::get('/register', 'index')->middleware('guest');
      Route::post('/register', 'store');
});

Route::controller(LoginController::class)->group(function(){
      Route::get('/login', 'index')->name('login')->middleware('guest');
      Route::post('/login', 'authentication');
      Route::post('/logout', 'logout');
});

Route::get('/dashboard', function(){
      return view('dashboard.index', [
            'post' => Post::all()
      ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');