<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NiceController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
    
    
    
});

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('history', 'index')->name('history');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(NiceController::class)->middleware(['auth'])->group(function(){
    
    //resourceコントローラー
    Route::resource('/post','PostController');

    //いいねを付ける
    Route::get('/nice/{post}','nice')->name('nice');

    //いいねを表示するページ
    Route::get('/index','index')->name('post.show');

    //いいねを外す
    Route::get('/unnice/{post}','unnice')->name('unnice');
});


require __DIR__.'/auth.php';
