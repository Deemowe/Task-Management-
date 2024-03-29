<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectManagementController;
use App\Http\Controllers\TaskManagementController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/projects', [ProjectManagementController::class, 'index'])->name('admin.projects');
    Route::get('/admin/projects/create', [ProjectManagementController::class, 'create'])->name('admin.projects.create');


});



Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/tasks', [TaskManagementController::class, 'index'])->name('user.tasks');
});

require __DIR__.'/auth.php';
