<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/uts');
});


Route::get('/uts', function () {
    return view('uts.index');
});

Route::get('/uts/create', function () {
    return view('uts.create');
});

Route::get('/uts/list', function () {
    return view('uts.list');
});