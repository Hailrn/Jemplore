<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/', function () {
    return view('dasboardowner');
});

Route::get('/', function () {
    return view('manageevents');
});

Route::get('/', function () {
    return view('halkelolaprofil');
});

Route::get('/', function () {
    return view('submission');
});

Route::get('/', function () {
    return view('performance');
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
