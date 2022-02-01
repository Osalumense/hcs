<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);
// Route::get('/login', [PageController::class, 'renderLogin']);
// Route::get('/register', [PageController::class, 'renderRegister']);
Route::get('/adm', [PageController::class, 'Admex']);



Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin-auth']], function () {
        Route::get('/', [HomeController::class, 'Adminindex']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
