<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenghuniController;

Route::get('/', function () {
    return redirect()->route('penghuni.index');
});

Route::resource('penghuni', PenghuniController::class);