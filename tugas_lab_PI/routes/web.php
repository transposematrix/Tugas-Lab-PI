<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::apiResource('contacts', ContactController::class);
Route::get('contacts.create', [ContactController::class, 'create'])->name('contactscreate');
Route::post('contacts.store', [ContactController::class, 'store'])->name('contactsstore');
Route::get('contacts.edit/{id}', [ContactController::class, 'edit'])->name('contactsedit');
Route::patch('contacts.update/{id}', [ContactController::class, 'update'])->name('contactsupdate');
Route::get('contacts.destroy/{id}', [ContactController::class, 'destroy'])->name('contactsdestroy');