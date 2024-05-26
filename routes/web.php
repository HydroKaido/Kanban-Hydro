<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('pages.homepage.index');
});

Route::get('/setting', [PageController::class, 'setting'])->name('pages.settingpage.index');
Route::get('/feature', [PageController::class, 'feature'])->name('pages.featurepage.index');