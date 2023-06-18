<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReplyCommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');

    Route::get('get_majors', [MajorController::class, 'get_majors'])->name('get_majors');

    Route::middleware(['ensureRole:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('faculty', FacultyController::class);
        Route::resource('major', MajorController::class);
        Route::resource('alumni', UserController::class);
        Route::resource('news', NewsController::class);
        Route::resource('comment', CommentController::class);
        Route::resource('reply', ReplyCommentController::class);

        Route::get('alumni/change_status', [UserController::class, 'change_status'])->name('alumni.change_status');
    });
});

require __DIR__ . '/auth.php';
