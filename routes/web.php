<?php
use App\Http\Controllers\AppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ThemesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\DisqusController;
use App\Http\Controllers\BooksController;



Route::prefix('/')->group(function () {
    Route::redirect('', 'home');
    Route::get('home', [AppController::class, 'index'])->name('main');
    Route::get('book/title/{title_id}', [AppController::class, 'bookDetails'])->name('book_details');

    Route::get('forums', [AppController::class, 'forums'])->name('forums');
    Route::get('forums/forum/{forum_id}', [AppController::class, 'forumDetails'])->name('forum_details');

    Route::get('literature', [AppController::class, 'literature'])->name('literature');

    Route::get('teacher', [AppController::class, 'teacher'])->name('teacher');

    Route::prefix('')->middleware('auth')->group(function () {
        Route::get('test/{test_id}', [AppController::class, 'test'])->name('test');
        Route::get('test/result/{result_test_id}', [AppController::class, 'testResult'])->name('test_result');
        Route::post('user/test/controller', [AppController::class, 'testController'])->name('user.test.controller');

        Route::post('forum/store', [AppController::class, 'forumStore'])->name('user.forum.store');
        Route::post('forum/comment/store', [AppController::class, 'forumCommentStore'])->name('user.forum.comment.store');
    });

    Route::get('download/{fileName}', [AppController::class, 'downloadFile'])->name('download');

    Route::prefix('profile')->middleware(\App\Http\Middleware\UserMiddleware::class)->group(function () {
        Route::get('', [AppController::class, 'profile'])->name('profile');
    });
});

Route::prefix('auth')->group(function () {
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});



Route::prefix('admin')->middleware('auth')->middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
    Route::get('tests/{test}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::get('tests/{test}/questions/index', [QuestionController::class, 'index'])->name('questions.index');

    Route::post('questions/store/{test_id}', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('questions/edit/{test_id}', [QuestionController::class, 'edit'])->name('questions.edit');

    Route::delete('questions/destroy/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
    Route::put('questions/update/{question}', [QuestionController::class, 'update'])->name('questions.update');

    Route::get('forums/{forum}/disqus/create', [DisqusController::class, 'create'])->name('disqus.create');
    Route::get('forums/{forum}/disqus/index', [DisqusController::class, 'index'])->name('disqus.index');

    Route::post('disqus/store/{test_id}', [DisqusController::class, 'store'])->name('disqus.store');
    Route::get('disqus/edit/{test_id}', [DisqusController::class, 'edit'])->name('disqus.edit');
    Route::delete('disqus/destroy/{disqus}', [DisqusController::class, 'destroy'])->name('disqus.destroy');
    Route::put('disqus/update/{question}', [DisqusController::class, 'update'])->name('disqus.update');

    Route::redirect('', 'admin/themes');
    Route::resource('themes', ThemesController::class);
    Route::resource('tests', TestController::class);
    Route::resource('forums', ForumController::class);
    Route::resource('results', ResultController::class);
    Route::resource('books', BooksController::class);
    Route::resource('users', UserController::class);
});


