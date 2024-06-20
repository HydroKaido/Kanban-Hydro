<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BoardController;

Route::get('/', function () { return view('pages.homepage.index'); })->name('pages.homepage.index');
Route::get('/board', function () { return view('components.modal.createtask.index'); })->name('components.modal.createtask.index');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('pages.dashboardpage.index');
Route::get('/register', [PageController::class, 'register'])->name('pages.registerpage.index');
Route::get('/setting', [PageController::class, 'setting'])->name('pages.settingpage.index');
Route::get('/feature', [PageController::class, 'feature'])->name('pages.featurepage.index');
Route::post('/board', [BoardController::class, 'createboard'])->name('board.store');
Route::get('/', [BoardController::class, 'board'])->name('pages.homepage.index');
Route::put('/boards/update/{board}', [BoardController::class, 'updateboard'])->name('board.update');
Route::delete('/boards/delete/{board}', [BoardController::class, 'deleteboard'])->name('boards.delete');
Route::fallback(function () {
    return response()->view('pages.errorpage.index', [], 404);
});

