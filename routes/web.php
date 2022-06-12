<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about_us'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact_us'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
Route::get('/faq', [FaqController::class, 'show'])->name('faq');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
Route::get('/category/{id}', [HomeController::class, 'category_book'])->name('category_book');
Route::get('/book/{id}', [HomeController::class, 'book'])->name('book');
Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/user/profile', [HomeController::class, 'user_profile'])->name('user_profile');

##COMMENTS
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');


Route::redirect('/anasayfa', '/home')->name('anasayfa');

##homepages



// ---------------- ADMİN PANEL ROUTES--------------
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/login', [HomeController::class, 'login'])->name('admin_login');
    //----------------SETTINGS--------------
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
        Route::post('/update', [SettingsController::class, 'update'])->name('update');
    });
    // ---------------- ADMİN CATEGORY ROUTES--------------
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'delete')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
    });
    // ------------------- ADMİN BOOK IMAGE ROUTES --------------------
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{bid}', 'index')->name('index');
        Route::post('/store/{bid}', 'store')->name('store');
        Route::get('/delete/{bid}/{id}', 'delete')->name('delete');
    });
    //-----------------------ADMİN BOOK  ROUTES ----------------
    Route::prefix('book')->name('book.')->controller(BookController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'delete')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //-----------------------MESSAGE  ROUTES ----------------

    Route::prefix('messages')->name('messages.')->controller(MessageController::class)->group(function () {
        Route::get('/', "index")->name('index');
        Route::get('/edit/{id}', "edit")->name('edit');
        Route::post('/update/{id}', "update")->name('update');
        Route::get('/delete/{id}', "destroy")->name('delete');
    });

    //-----------------------FAQ----------------
    Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', "index")->name('index');
        Route::get('/edit/{id}', "edit")->name('edit');
        Route::post('/update/{id}', "update")->name('update');
        Route::get('/delete/{id}', "destroy")->name('delete');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });
    //-----------------------Admin Comment----------------
    Route::prefix('comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', "index")->name('index');
        Route::get('/delete/{id}', "destroy")->name('delete');
        Route::post('/update/{id}', "update")->name('update');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //-----------------------Admin Comment----------------
    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
        Route::get('/', "index")->name('index');
        Route::get('/delete/{id}', "destroy")->name('delete');
        Route::post('/update/{id}', "update")->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
