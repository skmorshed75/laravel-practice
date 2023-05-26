<?php

use App\Http\Controllers\demoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\headerBodyController;
use App\Http\Controllers\formdataController;
use App\Http\Controllers\api\V1\TaskController;

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
//Starting an Api project with laravel
//Route::prefix('v1')->group(function() {
//    Route::apiResource("/tasks",TaskController::class);
//});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
//Module 14 - 1
//Route::get('/hello',[demoController::class,"demoAction"]);

//Module 14 - 2
//Route::get('/hello/{name}/{age}', [demoController::class,'demoAction']);

//Module 14 - 3
Route::post('/hello', [demoController::class,'demoAction']);

//Module 14 - 4
Route::post('/hello', [demoController::class,'HeaderData']);

//Module 14 - 5
Route::post('/hello/{name}/{age}', [headerBodyController::class,'headerBody']);

//Module 14 - 6
Route::post('/hello', [formdataController::class, 'demoAction']);
*/

Route::post('/hello/{name}/{age}', [headerBodyController::class,'headerBody']);
