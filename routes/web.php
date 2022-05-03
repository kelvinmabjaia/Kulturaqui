<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () { return view('welcome'); });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('kult.index');
    })->name('dashboard');
});

// INIT Administrador 

    // INIT User 
        Route::post('/user', [UserController::class, 'store'])->name('user.create');
    // FIM User

// FIM Administrador 
      