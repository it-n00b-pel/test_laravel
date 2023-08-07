<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

//Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix'=>'admin'], function(){
//    Route::group(['namespace'=>'Post'], function(){
//        Route::get('/post', 'IndexController' )->name('admin.post.index');
//    });
//});

//Route::group(['namespace' => '\App\Http\Controllers\Admin\Post'], function () {
//    Route::prefix('/admin')->group(function () {
//        Route::get('/post', IndexAdminController::class)->name('admin.post.index');
//    });
//});


Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

//Route::group(['namespace' => 'Post'], function () {
//    Route::get('/posts', 'IndexController')->name('post.index');
//    Route::get('/posts/create', 'CreateController')->name('post.create');
//
//    Route::post('/posts/create', 'StoreController')->name('post.store');
//    Route::get('/posts/{post}', 'ShowController')->name('post.show');
//    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
//    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
//    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
//});


//Route::get('/posts/update', [\App\Http\Controllers\PostController::class, 'update']);
//Route::get('/posts/delete', [\App\Http\Controllers\PostController::class, 'delete']);
//Route::get('/posts/first_or_create', [\App\Http\Controllers\PostController::class, 'firstOrCreate']);
//Route::get('/posts/create_or_update', [\App\Http\Controllers\PostController::class, 'updateOrCreate']);

Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/contacts/create', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts/create', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/contacts/{contact}', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
Route::delete('/contacts/{contact}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.delete');
Route::get('/contacts/{contact}/edit', [\App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
Route::patch('/contacts/{contact}', [\App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');


Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
