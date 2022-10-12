<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/page', function () {
//     return view('page/student');
// });

// Route::get('/page/create', function () {
//     return view('page/create');
// });

Route::get('/page/student', [SiswaController::class,'index']);
Route::get('/page/create', [SiswaController::class,'create']);
Route::post('/page/student', [SiswaController::class, 'store']);
Route::get('/page/edit/{id}', [SiswaController::class,'edit']);
Route::put('/page/student/{id}', [SiswaController::class, 'update']);
Route::delete('/page/destroy/{id}', [SiswaController::class, 'destroy']); // /page/destroy{id} mengarah ke function destroy di SiswaController
