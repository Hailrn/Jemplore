<?php

use Illuminate\Support\Facades\Route;

// Publik
Route::name('public.')->group(function () {
    Route::get('/', function () { return view('landing'); })->name('home');
    Route::get('/destination', function () { return view('destination'); })->name('destinations');
    Route::get('/culinary', function () { return view('culinary'); })->name('culinary');
    Route::get('/event', function () { return view('event'); })->name('events');
    Route::get('/package', function () { return view('tour-package'); })->name('packages');
});

// Owner
Route::prefix('owner')->name('owner.')->group(function () {
    Route::get('/dashboard', function () { return view('dasboardowner'); })->name('dashboard');
    Route::get('/manage-events', function () { return view('manageevents'); })->name('events.manage');
    Route::get('/profile', function () { return view('halkelolaprofil'); })->name('profile.manage');
    Route::get('/submission', function () { return view('submission'); })->name('submission.status');
    Route::get('/performance', function () { return view('performance'); })->name('reports.performance');
});

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () { return view('admin.admin_dashboard'); })->name('dashboard');
    Route::get('/verification', function () { return view('admin.verification'); })->name('verification');
    Route::get('/users', function () { return view('admin.users'); })->name('users');
    Route::get('/master-data', function () { return view('admin.masterdata'); })->name('masterdata');
    Route::get('/reports', function () { return view('admin.reports'); })->name('reports');
    Route::get('/settings', function () { return view('admin.settings'); })->name('settings');
});