<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/greetings', function () {
    return 'Welcome to the Setu International...!!!';
});
Route::get('/getData',[UserController::class,'index'])->name('getData');

Route::get('/get-data',[InquiryController::class,'index'])->name('getInquiryData');
Route::post('/create-inquiry',[InquiryController::class,'create'])->name('createInquiry');
Route::post('/Update-inquiry',[InquiryController::class,'update'])->name('updateInquiry');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });User