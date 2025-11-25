<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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
