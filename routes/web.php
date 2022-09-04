<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\AdminRecipiController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('index');
// });

// お問い合わせフォーム
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail']);
Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');

//レシピ
Route::get('/admin/recipis', [AdminRecipiController::class, 'index'])->name('admin.recipis.index');
Route::get('/admin/recipis/create', [AdminRecipiController::class, 'create'])->name('admin.recipis.create');
Route::post('/admin/recipis', [AdminRecipiController::class, 'store'])->name('admin.recipis.store');
Route::get('/admin/recipis/{recipi}', [AdminRecipiController::class, 'edit'])->name('admin.recipis.edit');
