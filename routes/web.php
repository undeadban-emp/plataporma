<?php

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

Route::resource('/alexander-t-pimentel', 'alexanderController');
Route::resource('/romeo-s-momo', 'RomeoMomoController');
Route::resource('/johnny-t-pimentel', 'johnnyController');

Route::resource('/vj-pimentel', 'vjPimentelController');
Route::resource('/philip-pichay', 'philipPichayController');
Route::resource('/mary-grace-kimura', 'maryGraceKimuraController');
Route::resource('/jane-plaza', 'janePlazaController');
Route::resource('/marvin-azarcon', 'marvinAzarconController');
Route::resource('/dennis-yu', 'dennisYuController');
Route::resource('/roxanne-pimentel', 'roxannePimentelController');
Route::resource('/henrich-pimentel', 'henrichPimentelController');
Route::resource('/poly-lozada', 'polyLozadaController');
Route::resource('/glenn-batiansila', 'glennBatiansilaController');
Route::resource('/dodoy-fazon', 'dodoyFazonController');
Route::resource('/nicolas-alameda', 'nicolasAlamedaController');
Route::resource('/kid-pedrozo', 'kidPedrozoController');
Route::resource('/joey-pama', 'joeyPamaController');
Route::resource('/shem-garay', 'shemGarayController');
Route::resource('/enchiong-garay', 'enchiongGarayController');
Route::resource('/boyet-evangelio', 'boyetEvangelioController');
Route::resource('/michael-corilla', 'michaelCorillaController');
Route::resource('/generoso-naraiso', 'generosoNaraisoController');
