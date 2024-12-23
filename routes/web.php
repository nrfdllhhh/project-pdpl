<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/dashboard');
})->name('admin');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/scheduleTask', function () {
    return view('admin/scheduleTask');
})->name('scheduleTask');
