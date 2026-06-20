<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModelleController;
use App\Http\Controllers\VehiculeController;
use App\Models\Marque;

Route::get('/', function () {
    $marques = Marque::all();
    return view('admin.marques.index', compact('marques'));
});
Route::get('/getModelles', [ModelleController::class, 'getModelles']);
Route::get('/getVersions', [ModelleController::class, 'getVersions']);

Route::resource('marques', MarqueController::class);
Route::resource('modelles', ModelleController::class);
Route::resource('vehicules', VehiculeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
