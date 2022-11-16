<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserInfosController;
use App\Http\Controllers\Api\AuthController;

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


/*
|--------------------------------------------------------------------------
| Users Table
|--------------------------------------------------------------------------
|
*/

// Get api for fetch users

Route::get('/users/{id?}',[UserController::class, 'showUser']);

// Post api for add user (Single User)
Route::post('/add-user/',[UserController::class, 'addUser']);

// Post api for multiple user
Route::post('/add-multiple-user/',[UserController::class, 'addMultipleUser']);

// Put api for update all user details field
Route::put('/update-user-details/{id}',[UserController::class, 'updateUserDetails']);

// Patch api for update only single record
Route::patch('/update-single-record/{id}',[UserController::class, 'updateSingleRecord']);

// delete api for delete single user with parameter
Route::delete('/delete-single-record/{id}',[UserController::class, 'deleteUser']);

// delete api for delete single user
Route::delete('/delete-single-user-with-json',[UserController::class, 'deleteUserJson']);

// delete api for delete multiple user
Route::delete('/delete-multiple-user/{ids}',[UserController::class, 'deleteMultipleUser']);

// delete api for delete multiple user with json
Route::delete('/delete-multiple-user-with-json',[UserController::class, 'deleteMultipleUserJson']);

//Route::post('/register',[UserController::class,'register']);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/auth/user',[AuthController::class,'user'])->middleware('auth:sanctum');

Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');





/*
|--------------------------------------------------------------------------
| Users Table
|--------------------------------------------------------------------------
|
*/

// Get api for fetch users

Route::get('/userinfos/{id?}',[UserInfosController::class, 'showUserInfos']);

// Put api for update all user infos field
Route::put('/update-user-infos/{id}',[UserInfosController::class, 'updateUserInfos']);

// Patch api for update only single record
Route::patch('/update-single-infos/{id}',[UserInfosController::class, 'updateSingleInfos']);
