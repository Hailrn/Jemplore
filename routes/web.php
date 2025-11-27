<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AdminController;

// Public
Route::name('public.')->group(function () {
    Route::get('/', [PublicController::class, 'index'])->name('home');
    Route::get('/destination', [PublicController::class, 'destination'])->name('destinations');
    Route::get('/culinary', [PublicController::class, 'culinary'])->name('culinary');
    Route::get('/event', [PublicController::class, 'event'])->name('events');
    Route::get('/package', [PublicController::class, 'package'])->name('packages');

    Route::get('/destination/{id}', [PublicController::class, 'show'])->name('destination.show');
    Route::get('/culinary/{id}', [PublicController::class, 'culinaryProfile'])->name('culinary.profile');
    Route::get('/event/{id}', [PublicController::class, 'eventProfile'])->name('event.profile');
    Route::get('/package/{id}', [PublicController::class, 'packageProfile'])->name('package.profile');
});

// Owner
Route::middleware(['auth', 'role:owner'])->prefix('owner')->name('owner.')->group(function () {
    Route::get('/dashboard', function () { return view('owner.dashboardowner'); })->name('dashboard');
    Route::get('/manage-events', function () { return view('owner.manageevents'); })->name('events.manage');
    Route::get('/manage-culinary', function () { return view('owner.manageculinary'); })->name('culinary.manage');
    Route::get('/profile', [OwnerController::class, 'manageProfile'])->name('profile.manage');
    Route::post('/profile/update', [OwnerController::class, 'updateProfile'])->name('profile.update');
    Route::get('/submission', function () { return view('owner.submission'); })->name('submission.status');
    Route::get('/performance', function () { return view('owner.performance'); })->name('reports.performance');
});

// Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () { return view('admin.admin_dashboard'); })->name('dashboard');
    Route::get('/verification', [AdminController::class, 'verification'])->name('verification');
    Route::post('/verification/{id}/approve', [AdminController::class, 'approve'])->name('verification.approve');
    Route::post('/verification/{id}/reject', [AdminController::class, 'reject'])->name('verification.reject');
    Route::get('/users', function () { return view('admin.users'); })->name('users');
    Route::get('/master-data', function () { return view('admin.masterdata'); })->name('masterdata');
    Route::get('/reports', function () { return view('admin.reports'); })->name('reports');
    Route::get('/settings', function () { return view('admin.settings'); })->name('settings');
});

Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');