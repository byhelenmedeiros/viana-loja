<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::middleware('auth')
     ->prefix('admin/products')
     ->name('admin.products.')
     ->group(function() {
         // index
         Route::get('/', [ProductController::class, 'index'])->name('index');
         // create
         Route::get('/create', [ProductController::class, 'create'])->name('create');
         // store
         Route::post('/', [ProductController::class, 'store'])->name('store');
         // show
         Route::get('/{product}', [ProductController::class, 'show'])->name('show');
         // edit
         Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
         // update
         Route::put('/{product}', [ProductController::class, 'update'])->name('update');
         // destroy
         Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
     });
