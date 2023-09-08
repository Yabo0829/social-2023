<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreatePostController;

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

Route::prefix('/')->middleware('auth')->group(function()
{
    Route::get('index', [UserController::class, 'main'])->name('social.index');
    Route::get('', [UserController::class, 'logout'])->name('social.logout');

});

Route::get('/register', [UserController::class, 'register'])->name('social.register');
Route::get('/login', [UserController::class, 'login'])->name('social.login');
Route::post('/register', [UserController::class, 'registerUser'])->name('social.userreg');
Route::post('/index', [UserController::class, 'loginUser'])->name('social.userlog');
Route::post('/', [CreatePostController::class, 'createPost'])->name('social.create_post');
Route::get('/global', [CreatePostController::class, 'global'])->name('social.global');
Route::get('/global/{yourpost}/edit', [CreatePostController::class, 'edit'])->name('social.edit');
Route::put('/global/{yourpost}/update', [CreatePostController::class, 'update'])->name('social.update');
Route::delete('/global/{yourpost}/destroy', [CreatePostController::class, 'destroy'])->name('social.destroy');



