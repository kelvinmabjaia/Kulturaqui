<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaisController;
use App\Http\Controllers\TeatroController;
use App\Http\Controllers\UserController;


// + Visitante // Register
Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
// - Visitante 

// + Dashboard
    Route::middleware(['dashboard'])
    ->group(function () {

        Route::get('/dashboard', function () { return view('dashboard.index'); }); 

        // List
        Route::get('/teatro', [TeatroController::class, 'index'])->name('teatro.index');
        
    });
//-+ Dashboard

// + Administrador 

    Route::middleware(['administrador'])
    ->group(function () {
        
        // User
        Route::get('/users', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/{user}/edit/status', [UserController::class, 'editStatus']);
        Route::post('/user/{user}/status', [UserController::class, 'updateStatus']);

        // Pais
        Route::get('/pais', [PaisController::class, 'index'])->name('pais.index');
        Route::get('/pais/create', [PaisController::class, 'create'])->name('pais.create');
        Route::post('/pais', [PaisController::class, 'store'])->name('pais.store');
        Route::get('/pais/{pais}/edit', [PaisController::class, 'edit']);
        Route::post('/pais/{pais}', [PaisController::class, 'update']);
        Route::get('/pais/{pais}/view', [PaisController::class, 'show']);
        Route::post('/pais/{pais}/destroy', [PaisController::class, 'destroy']);

    });

// - Administrador 

// + Colaborador

    Route::middleware(['colaborador'])
    ->group(function () {

        //Teatro
        Route::get('/teatro/create', [TeatroController::class, 'create'])->name('teatro.create');
        Route::post('/teatro', [TeatroController::class, 'store'])->name('teatro.store');

    });

// - Colaborador



// + Assinante

    Route::middleware(['assinante'])
    ->group(function () {

        Route::get('/', function () { return view('kult.index'); }); 

        Route::get('/watch/{teatro}', [TeatroController::class, 'watch']);

    });

// - Assinante

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [UserController::class, 'login'])->name('dashboard');
});



      