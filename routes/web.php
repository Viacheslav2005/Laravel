<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [UsersController::class, 'show_signin'])->name('show_signin');
Route::get('/register', [UsersController::class, 'show_signup'])->name('show_signup');
Route::post('/signin', [UsersController::class, 'signin'])->name('signin');
Route::post('/signup', [UsersController::class, 'signup'])->name('signup');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

Route::get('/personal_account', [UsersController::class, 'personal_account'])->name('personal_account');
Route::get('/application', [UsersController::class, 'application'])->name('application');
Route::post('/application_add', [UsersController::class, 'application_add'])->name('application_add');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin_appl', [AdminController::class, 'admin_appl'])->name('admin_appl');
Route::post('/admin_accept/{id_appl}', [AdminController::class, 'admin_accept'])->name('admin_accept');
Route::post('/admin_reject/{id_appl}', [AdminController::class, 'admin_reject'])->name('admin_reject');
