<?php
use App\Http\Controllers\AppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThemesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\DisqusController;
use App\Http\Controllers\ContentController;



Route::prefix('/')->group(function () {
    Route::get('', [AppController::class, 'index'])->name('main');
    Route::get('home', [AppController::class, 'index'])->name('main');
    Route::get('book/title/{title_id}', [AppController::class, 'bookDetails'])->name('book_details');

    Route::get('forums', [AppController::class, 'forums'])->name('forums');
    Route::get('forums/{forum_id}', [AppController::class, 'forumDetails'])->name('forum_details');

    Route::get('docs', [AppController::class, 'docs'])->name('docs');
    Route::get('test/{test_id}', [AppController::class, 'test'])->name('test');

});

Route::prefix('/auth')->group(function () {
    Route::get('/login', function (){
        return view('auth.login');
    });

    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::prefix('/auth')->group(function () {
    Route::get('/register', function (){
        return view('auth.register');
    })->name('/register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('themes', ThemesController::class);
    Route::resource('questions', QuestionController::class);
    Route::resource('tests', TestController::class);
    Route::resource('forums', ForumController::class);
    Route::resource('results', ResultController::class);
    Route::resource('disqus', DisqusController::class);
    Route::resource('contents', ContentController::class);
});


