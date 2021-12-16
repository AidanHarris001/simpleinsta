<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');
Route::get('/{id}', [PostController::class, 'show'])
    ->name('posts.show');

Route::get('/profile/{account?}', function($account){
    return view('profile', ['account'=>$account]);
});

Route::get('/accounts', [AccountController::class, 'index'])
    ->name('accounts.index')->middleware('auth');
Route::get('/accounts/create', [AccountController::class, 'create'])
    ->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])
    ->name('accounts.store');
Route::get('/accounts/{id}', [AccountController::class, 'show'])
    ->name('accounts.show');
Route::delete('accounts/{id}', [AccountController::class, 'destroy'])
    ->name('accounts.destroy');

Route::get('/home/{userName?}', function ($userName = 'NoName') {
    return "This is $userName's home page";
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/secret', function () {
    return "secret";
})->middleware(['auth']);

require __DIR__.'/auth.php';
