<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NotamController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\StaffController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('/about')->group(function() {
    Route::get('/staff', [StaffController::class, 'publicIndex']);
    Route::get('/roster', [OperatorController::class, 'publicIndex']);
    Route::get('/airspace', [PageController::class, 'airspace']);
});

Route::prefix('/publications')->group(function() {
    Route::get('/policies', [PolicyController::class, 'publicIndex']);
    Route::prefix('/news')->group(function() {
        Route::get('/', [NewsController::class, 'publicIndex']);
        Route::get('/{id}', [NewsController::class, 'publicShow'])->name('frontend.publications.news.show');
    });
    Route::get('/notams', [NotamController::class, 'publicIndex']);
    Route::get('/loas', [LetterController::class, 'publicIndex']);
});

Route::get('/events', [EventController::class, 'publicIndex']);

Route::prefix('/contact')->group(function() {
    Route::get('/request', [RequestController::class, 'new']);
    Route::get('/feedback', [FeedbackController::class, 'new']);
    Route::get('/ask', [QuestionController::class, 'new']);
});

Route::get('/apply', [ApplicationController::class, 'new']);

Route::get('/language/{locale}', [LanguageController::class, 'setLocale'])->name('locale');

Route::prefix('auth')->group(function() {
    Route::get('login', [AuthController::class, 'login']);
});

Route::get('/ops/me', function() {
    return view('ops.me.index');
});
