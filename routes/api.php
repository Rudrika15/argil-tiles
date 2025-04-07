<?php

use App\Http\Controllers\api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/catelogue/{id?}',[ApiController::class,'catelougeview']);
Route::get('/home/{id?}',[ApiController::class,'homeview']);
Route::get('/inquiry/{id?}',[ApiController::class,'inquiryview']);

Route::get('/newsroom/{id?}',[ApiController::class,'newsroomview']);

Route::get('/quartzproduct/{id?}',[ApiController::class,'quartzproductview']);
Route::get('/wallproductview/{id?}',[ApiController::class,'wallproductview']);
Route::get('/spcproduct/{id?}',[ApiController::class,'lvtproductview']);

Route::post('/wallfilter',[ApiController::class,'wallfilter']);
Route::get('/quartzfilter/{id?}',[ApiController::class,'quartzfilter']);
Route::get('/spcfilter/{id?}',[ApiController::class,'spcfilter']);

Route::get('/slider/{id?}',[ApiController::class,'sliderview']);


Route::get('/wsizematsterview/{id?}',[ApiController::class,'wsizematsterview']);
Route::get('/qsizematsterview/{id?}',[ApiController::class,'qsizematsterview']);
Route::get('/stockview/{id?}',[ApiController::class,'stockview']);
Route::get('/designtypeview/{id?}',[ApiController::class,'designtypeview']);
Route::get('/finishtype/{id?}',[ApiController::class,'finishtypeview']);


Route::post('/register',[ApiController::class,'register']);
Route::post('/login',[ApiController::class,'login']);
Route::post('/profile/{id}',[ApiController::class,'profile']);
Route::post('/changepassword/{id}',[ApiController::class,'changepassword']);
Route::get('/usermasterview/{id?}',[ApiController::class,'usermasterview']);

Route::get('/favorite_view/{id}',[ApiController::class,'favorite_view']);
Route::post('/favorite_add',[ApiController::class,'favorite_add']);
Route::post('/favorite_remove',[ApiController::class,'favorite_remove']);
Route::post('/inquiry',[ApiController::class,'inquiry']);
Route::post('/contactus',[ApiController::class,'contactus']);
Route::post('/forgot',[ApiController::class,'forgot']);
