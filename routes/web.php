<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/culinary', function () {
    return view('culinary');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/package', function () {
    return view('tour-package');
});

// Owner Routes
Route::get('/owner', function () {
    return view('dashboardowner');
});

Route::get('/owner/manage-events', function () {
    return view('manageevents');
});

Route::get('/owner/profile', function () {
    return view('halkelolaprofil');
});

Route::get('/owner/submission', function () {
    return view('submission');
});

Route::get('/owner/performance', function () {
    return view('performance');
});

