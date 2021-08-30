<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContact;
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
//     return view('welcome');
// });

//group routes
Route::get('add-group', [GroupController::class, 'store']);
Route::get('view-group/{id}', [GroupController::class, 'show']);
Route::get('update-group/{id}', [GroupController::class, 'update']);
Route::get('delete-group/{id}', [GroupController::class, 'destroy']);

//user contact routes
Route::get('add-user-contact', [UserContactController::class, 'store']);
Route::get('view-user-contact/{id}', [UserContactController::class, 'show']);
Route::get('update-user-contact/{id}', [UserContactController::class, 'update']);
Route::get('delete-user-contact/{id}', [UserContactController::class, 'destroy']);


