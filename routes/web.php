<?php

use App\visitorCounter;
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

Route::get('/', function () {
    return view('index');
});
Route::resource('/plataporma', 'platapormaController');

Route::resource('/alexander-t-pimentel', 'alexanderController');
Route::resource('/first-district-accomplishment', 'FirstDistrictAccompController');
Route::resource('/second-district-accomplishment', 'SecondDistrictAccompController');


