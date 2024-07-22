<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;

// Existing routes
Route::get('/', [PageController::class, 'homepage'])->name('pages.pieceboardpage.index');
Route::get('/board', [PieceController::class, 'piece'])->name('pages.pieceboardpage.index');
Route::post('/board/piece', [PieceController::class, 'createpiece'])->name('create.piece');
Route::get('/board/piece/{id}', [PieceController::class, 'showPiece'])->name('piece.data');
Route::delete('/board/piece/delete/{id}', [PieceController::class, 'deletePiece'])->name('piece.delete');

// New route for boards
Route::group(['middleware' => 'auth'], function () {
Route::post('/board/pieces/{id}/board', [BoardController::class, 'createboard'])->name('board.store');
Route::put('/boards/update/{board}', [BoardController::class, 'updateboard'])->name('board.update');
Route::delete('/boards/delete/{board}', [BoardController::class, 'deleteboard'])->name('boards.delete');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('pages.dashboardpage.index');
Route::get('/setting', [PageController::class, 'setting'])->name('pages.settingpage.index');
Route::get('/feature', [PageController::class, 'feature'])->name('pages.featurepage.index');
Route::delete('/logout', [AuthController::class, 'logoutAuth'])->name('logout.post');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [PageController::class, 'register'])->name('auth.registerpage.index');
    Route::post('/register', [AuthController::class, 'registerAuth'])->name('register.create');
    Route::get('/login', [PageController::class, 'login'])->name('auth.loginpage.index');
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');
    Route::post('/login', [AuthController::class, 'loginAuth'])->name('login.post');
    Route::get('/register/google', [AuthController::class, 'loginAuthGoogle'])->name('login.auth');
    Route::get('/register/google/callback', [AuthController::class, 'loginAuthCallback'])->name('login.callback');
});

Route::fallback(function () {
    return response()->view('pages.errorpage.index', [], 404);
});


