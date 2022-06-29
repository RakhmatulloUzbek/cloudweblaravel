<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');
});
// -------------Home Page Routes--------------------------------------------
Route::get('/not_found', function () {
    return view('home/page_404');
})->name('page_404');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/post', [HomeController::class, 'services'])->name('post');
Route::get('/service', [HomeController::class, 'posts'])->name('service');
Route::get('/post_detail', [HomeController::class, 'post_detail'])->name('post_detail');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::post('/loginusercheck', [HomeController::class, 'loginusercheck'])->name('loginusercheck');


//// -------------Admin Page Routes--------------------------------------------
//Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
//Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
Route::middleware('auth')->group(function () {
    Route::prefix('user')->namespace('user')->group(function () {
        Route::get('/profile', [AdminHomeController::class, 'profile'])->name('profile.show');
    });
    //-------------Admin Page Routes--------------------------------------------
    Route::middleware('admin')->prefix('/admin')->name('admin.')->group(function () {

        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/profile', [AdminHomeController::class, 'profile'])->name('profile');

        //************** Admin Category Routes ***************//
        Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        //************** Admin Service Routes ***************//
        Route::prefix('/post')->name('post.')->controller(PostController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        //************** Admin Blogs Routes ***************//
        Route::prefix('/service')->name('service.')->controller(ServiceController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
        });
        //************** Admin service Image Gallery Routes ***************//
        Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {

            Route::get('/{pid}', 'index')->name('index');
            Route::get('/create/{pid}', 'create')->name('create');
            Route::post('/store/{pid}', 'store')->name('store');
            Route::post('/update/{pid}/{id}', 'update')->name('update');
            Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
        });
        //************** Admin Message Routes ***************//
        Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
    });
});
