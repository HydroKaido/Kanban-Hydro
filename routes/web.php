<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BoardController;

Route::get('/', function () {
    return view('pages.homepage.index');
})->name('pages.homepage.index');

Route::get('/board', function () {
    return view('pages.createtask.index');
})->name('pages.createtask.index');

Route::get('/setting', [PageController::class, 'setting'])->name('pages.settingpage.index');
Route::get('/feature', [PageController::class, 'feature'])->name('pages.featurepage.index');
Route::post('/board', [BoardController::class, 'createboard'])->name('board.store');
Route::get('/', [BoardController::class, 'board'])->name('pages.homepage.index');
Route::put('/board/update/{board}', [BoardController::class, 'updateboard'])->name('board.update');


