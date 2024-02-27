<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    Route::get('management',[App\Http\Controllers\ManagementController::class,'index'])->name('management');
    Route::get('management/create',[App\Http\Controllers\ManagementController::class,'create']);
    Route::post('management/create',[App\Http\Controllers\ManagementController::class,'store']);
    Route::get('management/{id}/edit',[App\Http\Controllers\ManagementController::class,'edit']);
    Route::put('management/{id}/edit',[App\Http\Controllers\ManagementController::class,'update']);
    Route::get('management/{id}/delete',[App\Http\Controllers\ManagementController::class,'destroy']);
    });

require __DIR__.'/auth.php';
