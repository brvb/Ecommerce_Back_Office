<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\promotionsController;
use App\Livewire\Category\CreateCategory;
use App\Http\Controllers\usersController;
use App\Livewire\Users\users;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [dashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/category', [categoryController::class, 'index'])->name('category');
Route::get('/create-category', [categoryController::class, 'indexCreate'])->name('create-category');

Route::get('/products', [productsController::class, 'index'])->name('products');
Route::get('/create-product', [CreateProductController::class, 'index'])->name('create-product');

Route::get('/users', [usersController::class, 'index'])->name('users');
Route::get('/create-users', [usersController::class, 'indexCrate'])->name('create-users');

Route::get('/promotions', [promotionsController::class, 'index'])->name('promotions');
Route::get('/create-promotion', [promotionsController::class, 'indexCreate'])->name('create-promotion');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
