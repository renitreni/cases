<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\CasesLivewire;
use App\Http\Livewire\LiftedLivewire;
use App\Http\Livewire\SearchableLivewire;
use App\Http\Livewire\UserLivewire;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    // Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget_password');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    // Route::post('/signup',[AuthController::class,'signup'])->name('signup');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('cases', CasesLivewire::class)->name('cases');
    Route::get('lifted', LiftedLivewire::class)->name('lifted');
    Route::get('searchables', SearchableLivewire::class)->name('searchables');
    Route::get('users', UserLivewire::class)->name('users');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
