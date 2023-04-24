<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\Conferences;

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

Route::get('/', [App\Http\Controllers\AuthorsController::class, 'show'])->name('home');

Auth::routes();


Route::middleware('auth')->group(function ()
{
    Route::get('admin/conferences', [App\Http\Controllers\AuthorsController::class, 'index'])->name('authors.index');

    Route::get('admin/conferences/create', [App\Http\Controllers\AuthorsController::class, 'create'])->name('authors.create');

    Route::patch('admin/conferences', [App\Http\Controllers\AuthorsController::class, 'store'])->name('authors.store');

    Route::get('admin/conferences/edit/{id}', [App\Http\Controllers\AuthorsController::class, 'edit'])->name('authors.edit');

    Route::patch('admin/conferences/edit/{id}', [App\Http\Controllers\AuthorsController::class, 'update'])->name('authors.update');

    Route::delete('admin/conferences/{id}', [App\Http\Controllers\AuthorsController::class, 'destroy'])->name('authors.destroy');

});
