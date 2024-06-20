<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientsController::class, 'index'])->name('client.index');

Route::get('new-client', [ClientsController::class, 'create'])->name('client.create');

Route::post('client', [ClientsController::class, 'store'])->name('client.store');

Route::get('client/delete/{id}', [ClientsController::class, 'delete'])->name('client.delete');

Route::get('client/{id}', [ClientsController::class, 'show'])->name('client.show');

Route::post('client/update', [ClientsController::class, 'update'])->name('client.update');
