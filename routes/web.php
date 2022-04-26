<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about_us'])->name('about');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::get('/', function() {
    return view('home.index',['name' => 'Nursima ASİLTÜRK']);
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');
// Admin ---------
Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// ---------------- ADMİN Category--------------
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin_category_delete');
Route::get('/admin/category/show/{id}',[CategoryController::class,'show'])->name('admin_category_show');