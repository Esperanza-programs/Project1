<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [PageController::class,'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/test', [PageController::class,'test'])->name('test');

Route::get('/news', [PageController::class,'new'])->name('new');

Route::get('/login', [PageController::class,'login'])->name("login");

Route::get("/admin", [PageController::class,"admin"])->name("admin");

Route::get("/privacy", [PageController::class,"privacy"])->name("privacy");

Route::get("/create-account", [AccountController::class,"createAccount"])->name("account-create");

Route::get("/show-data", [AccountController::class,'ShowData'])->name('showdata');

Route::get('/list-account', [AccountController::class,'listAccount'])->name('account.list-account');

Route::get('/list', [AccountController::class,'getallAccount'])->name('DB');