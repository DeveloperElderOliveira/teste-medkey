<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AuthController;

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
Route::post('login', [AuthController::class,'login']);

Route::group(['middleware' => ['apiJwt']], function(){
    Route::get('users',[UserController::class, 'index']);
    Route::get('departments/get-info-department-professional-patient/{patient_id}',[DepartmentController::class, 'getInfoDepartmentProfessionalPatient']);
});

