<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PieceController;

// Existing routes
Route::get('/', [PieceController::class, 'piece'])->name('pages.pieceboardpage.index');
Route::post('/piece', [PieceController::class, 'createpiece'])->name('create.piece');
Route::get('/piece/{id}', [PieceController::class, 'showPiece'])->name('piece.data');
Route::delete('/piece/delete/{id}', [PieceController::class, 'deletePiece'])->name('piece.delete');

// New route for boards
Route::post('/pieces/{id}/board', [BoardController::class, 'createboard'])->name('board.store');
Route::put('/boards/update/{board}', [BoardController::class, 'updateboard'])->name('board.update');
Route::delete('/boards/delete/{board}', [BoardController::class, 'deleteboard'])->name('boards.delete');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('pages.dashboardpage.index');
Route::get('/register', [PageController::class, 'register'])->name('auth.registerpage.index');
Route::get('/setting', [PageController::class, 'setting'])->name('pages.settingpage.index');
Route::get('/feature', [PageController::class, 'feature'])->name('pages.featurepage.index');
Route::fallback(function () {
    return response()->view('pages.errorpage.index', [], 404);
});


