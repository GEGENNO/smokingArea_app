<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\MapController;

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

Route::get('/hello', fn () => view('hello',['name'=>'まさや','time'=>'12']));

Route::get('/', fn () => view('index'));

// 世界の時間
Route::get('/world-time', [UtilityController::class,'worldTime'] );

// おみくじ
Route::get('/omikuji', [GameController::class,'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class,'montyHall']);

//フォーム
Route::get('/form', [RequestController::class,'form']);

//フォーム確認
Route::get('/query-strings', [RequestController::class,'queryStrings']);

Route::get('/smoke-area', [MapController::class,'showMap'] );