<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('pdf/form', [PdfController::class, 'showForm'])->name('pdf.form');
Route::post('/generate-pdf/{id}', [PdfController::class, 'generatePDF'])->name('generate.pdf');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/create', [PostController::class, 'create'])->name('post.create');

Route::get('/', function () {
    return view('grid');
});
