<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ComplaintController;

Route::get('/', function () {
   return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('members',MemberController::class);
    Route::resource('flats',FlatController::class);
    Route::resource('maintenance',MaintenanceController::class);
    Route::resource('expenses',ExpenseController::class);
    Route::resource('complaints',ComplaintController::class);

});

require __DIR__.'/auth.php';