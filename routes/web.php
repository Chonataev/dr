<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ThemesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\DisqusController;
use App\Http\Controllers\ContentController;

Route::get('/', [AppController::class, 'index'])->name('main');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);


Route::resource('themes', ThemesController::class);
Route::resource('questions', QuestionController::class);
Route::resource('tests', TestController::class);
Route::resource('forums', ForumController::class);
Route::resource('results', ResultController::class);
Route::resource('disqus', DisqusController::class);
Route::resource('contents', ContentController::class);
