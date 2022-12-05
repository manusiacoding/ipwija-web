<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// employee routes
// Route::prefix('employee')->group(function () {
//     Route::controller(EmployeeController::class)->group(function () {
//         Route::get('/', 'index');
//         Route::get('/show/{user_hash}', 'show');
//         Route::post('/store', 'store');
//         Route::post('update/{user_hash}', 'update');
//         Route::post('delete/{user_hash}', 'destroy');
//     });
// });
