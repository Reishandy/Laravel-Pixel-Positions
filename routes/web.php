<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(TagController::class)->group(function () {
    Route::get('/tag/{tag:name}', 'show');
});

Route::controller(EmployerController::class)->group(function () {
    Route::get('/company/{employer:name}', 'show');
});

Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create')->middleware(['guest'])->name('register');
    Route::post('/register', 'store')->middleware(['guest']);
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->middleware(['guest'])->name('login');
    Route::post('/login', 'store')->middleware(['guest']);
    Route::delete('/logout', 'destroy')->middleware(['auth'])->name('logout');
});
