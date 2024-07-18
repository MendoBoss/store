<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;

// Route::get('/', function () {
//     return view('welcome');
// });


// affichage produits
Route::get('/',[ProductController::class, 'index'])->name('product');
Route::get('/product/{product}',[ProductController::class, 'show'])->name('product.detail');
Route::get('/product/category/{id}',[ProductController::class, 'productByCategory'])->name('product.category');
// gestion des favoris
Route::middleware('auth')->group(function () {
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.lister');
    Route::get('/favorite/{product}', [FavoriteController::class, 'ajouter'])->name('favorite.ajouter');
});

// geestion dasboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// gestion des connexions
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// gestion des panier
Route::middleware('auth')->group(function () {
    Route::get('/panier', [PanierController::class, 'index'])->name('panier.lister');
    Route::get('/panier/add/{product}', [PanierController::class, 'ajouter'])->name('panier.ajouter');
    Route::get('/panier/remove/{panier}', [PanierController::class, 'remove'])->name('panier.remove');
    Route::get('/panier/moins/{panier}', [PanierController::class, 'moins'])->name('panier.moins');
});


require __DIR__.'/auth.php';
