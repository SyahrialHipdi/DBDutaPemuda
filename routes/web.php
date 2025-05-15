<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerifikatorController;
use App\Http\Controllers\JuriController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Landing Page Route
Route::get('/', [LandingPageController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth:admin', 'admin.role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    // Tambahkan route admin lainnya di sini
});

// Verifikator-specific routes
Route::prefix('verifikator')->middleware(['auth:admin', 'admin.role:verifikator'])->group(function () {
    Route::get('/dashboard', [VerifikatorController::class, 'dashboard']);
    // Tambahkan route verifikator lainnya di sini
});

// Juri-specific routes
Route::prefix('juri')->middleware(['auth:admin', 'admin.role:juri'])->group(function () {
    Route::get('/dashboard', [JuriController::class, 'dashboard']);
    // Tambahkan route juri lainnya di sini
});




// User Routes
Route::prefix('user')->group(function () {
    Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
    Route::post('/login', [UserAuthController::class, 'login']);
    Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->middleware('auth:web');
});



// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::get('/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [AdminAuthController::class, 'register']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('auth:admin');

        Route::middleware(['auth:admin', 'admin.role:admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        // Route khusus admin
    });
    
    Route::middleware(['auth:admin', 'admin.role:verifikator'])->group(function () {
        Route::get('/verifikator/dashboard', [VerifikatorController::class, 'dashboard']);
        // Route khusus verifikator
    });
    
    Route::middleware(['auth:admin', 'admin.role:juri'])->group(function () {
        Route::get('/juri/dashboard', [JuriController::class, 'dashboard']);
        // Route khusus juri
    });
});