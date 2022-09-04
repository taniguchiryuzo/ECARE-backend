<?php

use App\Http\Controllers\RecipiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/', function () {
    return 'hello';
});
// 一覧表示0901
// Route::get('/recipis', [RecipiController::class, 'getPostData'])->name('recipis');

// 一覧表示0903
Route::apiResource('/recipis', RecipiController::class);
