<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AuthAdminController;
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

Route::get('/', function () {
    return view('home');
});
#Route::get('/login', function () {
    #return view('login');
#});
#Route::get('/register', function () {
 #   return view('register');
#});
Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register-process', [AuthController::class, 'registerProcess'])->name('register.process');
Route::post('login-process', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('admin-login', [AuthAdminController::class, 'login']);
Route::get('view_content', [ContentController::class, 'index']);
Route::get('create_content', [ContentController::class, 'createContent']);
Route::get('createContent_process', [ContentController::class, 'createContentProc'])->name('create.content');

