<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BkashController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class, 'login']);
Route::post('login',[AuthController::class, 'AuthLogin']);
Route::get('logout',[AuthController::class, 'logout']);
Route::get('forgot-password',[AuthController::class, 'forgotpassword']);
Route::post('forgot-password',[AuthController::class, 'PostForgotPassword']);
Route::get('reset/{token}',[AuthController::class, 'reset']);
Route::post('reset/{token}',[AuthController::class, 'PostReset']);







Route::get('admin/admin/list', function () {
    return view('admin.admin.list');
});


Route::group(['middleware' => 'admin'], function(){

    Route::get('admin/dashboard',[DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list',[AdminController::class, 'list']);
    Route::get('admin/admin/add',[AdminController::class, 'add']);

});



Route::group(['middleware' => 'teacher'], function(){
    
    Route::get('teacher/dashboard',[DashboardController::class, 'dashboard']);

});



Route::group(['middleware' => 'student'], function(){
    
    Route::get('student/dashboard',[DashboardController::class, 'dashboard']);

});



Route::group(['middleware' => 'parent'], function(){
    
    Route::get('parent/dashboard',[DashboardController::class, 'dashboard']);

});

Route::group(['middleware' => ['customAuth']], function () {
    // Payment Routes for bKash
    Route::post('bkash/get-token', [BkashController::class, 'getToken'])->name('bkash-get-token');
    Route::get('bkash/create-payment', [BkashController::class, 'createPayment'])->name('bkash-create-payment');
    Route::post('bkash/execute-payment', [BkashController::class, 'executePayment'])->name('bkash-execute-payment');
    Route::get('bkash/query-payment', [BkashController::class, 'queryPayment'])->name('bkash-query-payment');
    Route::post('bkash/success', [BkashController::class, 'bkashSuccess'])->name('bkash-success');
});