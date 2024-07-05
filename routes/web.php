<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php

Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);

// routes/web.php

Route::group(['middleware' => ['role:admin,moderator']], function() {
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class)->middleware('role:admin');
});



require __DIR__.'/auth.php';