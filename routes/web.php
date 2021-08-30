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

//user contact route
Route::get('add-user-contact', [UserContact::class, 'store']);
Route::get('view-user-contact/{id}', [UserContact::class, 'show']);
Route::get('update-user-contact/{id}', [UserContact::class, 'update']);
Route::get('delete-user-contact/{id}', [UserContact::class, 'destroy']);
