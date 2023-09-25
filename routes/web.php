<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\HomePage;
use App\Livewire\ListUser;
use App\Livewire\UserDetail;
use App\Livewire\UserRegister;

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

Route::get('/', HomePage::class);
Route::get('/user', ListUser::class);
Route::get('/user/{user}', UserDetail::class);
// Route::get('/counter', Counter::class);
// Route::get('/post', CreatePost::class);
// Route::get('/create-user', UserRegister::class);
