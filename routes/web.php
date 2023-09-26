<?php

use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\HomePage;
use App\Livewire\ListUser;
use App\Livewire\ToDo;
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

Route::get('/', HomePage::class)->name('HomePage');
Route::get('/user', ListUser::class);
Route::get('/user/{user}', UserDetail::class);
Route::get('/contact', Contact::class);
Route::get('/to-do', ToDo::class);
// Route::get('/create-user', UserRegister::class);
