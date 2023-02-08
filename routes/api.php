<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CoursePaperController;

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

Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('courses', CourseController::class)->only(['index', 'show']);
    Route::apiResource('courses.papers', CoursePaperController::class)->only(['index', 'show']);
});

Route::group(['prefix' => 'v2'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
    });

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::apiResource('courses', CourseController::class)->only(['index', 'show']);
        Route::apiResource('courses.papers', CoursePaperController::class)->only(['index', 'show']);
    });
});
