<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageController;


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
Route::get('/about', [HomeController::class, 'about_us'])->name('about');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

Route::get('/', function () {
    return view('home.index', ['name' => 'Nursima ASİLTÜRK']);
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// ---------------- ADMİN PANEL ROUTES--------------
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/login', [HomeController::class, 'login'])->name('admin_login');
    // ---------------- ADMİN CATEGORY ROUTES--------------
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','delete')->name('delete');
        Route::get('/show/{id}','show')->name('show');
    });
    // ------------------- ADMİN BOOK IMAGE ROUTES --------------------
    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{bid}','index')->name('index');
        Route::post('/store/{bid}','store')->name('store');
        Route::post('/update/{bid}/{id}','update')->name('update');
        Route::get('/delete/{bid}/{id}','delete')->name('delete');
        
    });
    //-----------------------ADMİN BOOK  ROUTES ----------------
    Route::prefix('book')->name('book.')->controller(BookController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','delete')->name('delete');
        Route::get('/show/{id}','show')->name('show');
    });
});
