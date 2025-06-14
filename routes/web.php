<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/job/search', 'search')->name('search-job');
    Route::get('/job/create', 'create')
        ->middleware(['auth'])
        ->name('create-job');
    Route::post('/job', 'store')
        ->middleware(['auth'])
        ->name('store-job');
    Route::get('/job/{job}/edit', 'edit')
        ->middleware(['auth'])
        ->can('update', 'job')
        ->name('edit-job');
    Route::post('/job/{job}', 'update')
        ->middleware(['auth'])
        ->can('update', 'job')
        ->name('update-job');
    Route::delete('/job/{job}', 'destroy')
        ->middleware(['auth'])
        ->can('delete', 'job')
        ->name('destroy-job');
});

Route::get('/tag/{tag:name}', [TagController::class, 'show']);

Route::controller(EmployerController::class)->group(function () {
    Route::get('/companies/', 'index')->name('companies');
    Route::get('/company/search', 'search')->name('search-company');
    Route::get('/company/{employer:name}', 'show');
});

Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create')
        ->middleware(['guest'])
        ->name('register');
    Route::post('/register', 'store')->middleware(['guest']);
});

Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')
        ->middleware(['guest'])
        ->name('login');
    Route::post('/login', 'store')->middleware(['guest']);
    Route::delete('/logout', 'destroy')
        ->middleware(['auth'])
        ->name('logout');
});
