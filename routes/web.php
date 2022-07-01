<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return redirect()->route('dashboard');
//    })->name('dashboard');
//});
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
    Route::get('/posts', [HomeController::class, 'posts'])->name('posts');
    Route::get('/categoryservices/{id}', [HomeController::class, 'categoryservices'])->name('categoryservices');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/post_detail/{id}', [HomeController::class, 'post_detail'])->name('post_detail');
    Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
    Route::view('/loginuser', 'home.login')->name('loginuser');
    Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
    Route::view('/registeruser', 'home.register')->name('registeruser');
    Route::post('/loginusercheck', [HomeController::class, 'loginusercheck'])->name('loginusercheck');
    Route::post('/getservices', [HomeController::class, 'getservices'])->name('getservices');


//// -------------Admin Page Routes--------------------------------------------
//Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
//Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
Route::middleware('auth')->group(function () {
    Route::prefix('user')->namespace('user')->group(function () {
        Route::get('/profile', [UserController::class, 'index'])->name('profile.show');
    });

    //************** User Panel Routes ***************//
    Route::prefix('/user')->controller(UserController::class)->name('user.')->group(function () {
        Route::get('/profile', 'index')->name('index');

    });
    //-------------Admin Page Routes--------------------------------------------
    Route::middleware('admin')->prefix('/admin')->name('admin.')->group(function () {

        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::get('/profile', [AdminHomeController::class, 'profile'])->name('profile');
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting/update', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

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
        Route::prefix('/services')->name('services.')->controller(ServiceController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
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
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        Route::prefix('/users')->name('users.')->controller(AdminUserController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        });
    });
});
