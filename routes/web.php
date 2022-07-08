<?php

use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\PostController;
use App\Http\Controllers\AdminPanel\ServiceController;
use App\Http\Controllers\AdminPanel\SubscribeController;
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
Route::view('/login', 'home.page_404')->name('login');
Route::view('/register', 'home.page_404')->name('register');
Route::view('/logout', 'home.page_404')->name('logout');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/posts', [HomeController::class, 'posts'])->name('posts');
Route::get('/categoryservices/{id}', [HomeController::class, 'categoryservices'])->name('categoryservices');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/data_detail/{title}', [HomeController::class, 'data_detail'])->name('data_detail');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::post('/loginusercheck', [HomeController::class, 'loginusercheck'])->name('loginusercheck');
Route::post('/getservices', [HomeController::class, 'getservices'])->name('getservices');
Route::post('/subcribe', [HomeController::class, 'subcribe'])->name('subcribe');

Route::view('/maintenance', 'home.maintenance')->name('maintenance');
Route::view('/docs', 'home.docs.index')->name('docs');


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

            Route::get('/postlar', 'index')->name('index');
            Route::get('/kampanyalar', 'kampanyalar')->name('kampanyalar');
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
            Route::get('/urunler', 'urunler')->name('urunler');
            Route::get('/hizmetler', 'hizmetler')->name('hizmetler');
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
        //************** Admin Faq Routes ***************//
        Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        //************** Admin Message Routes ***************//
        Route::prefix('/users')->name('users.')->controller(AdminUserController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });
        //************** Admin Users Routes ***************//
        Route::prefix('/subscribers')->name('subscribers.')->controller(SubscribeController::class)->group(function () {

            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');

        });
    });
});

