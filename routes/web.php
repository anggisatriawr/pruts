<?php

use App\Http\Controllers\UTSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/uts');
});


Route::get('/uts', [UTSController::class, "index"]);
Route::get('/uts/create', [UTSController::class, "create"]);
Route::post('/uts/create', [UTSController::class, "store"]);
Route::get('/uts/list', [UTSController::class, "list"]);
