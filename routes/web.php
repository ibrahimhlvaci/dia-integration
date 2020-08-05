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
    return view('giris');
});
Route::get('/home', 'HomeController@index')->name('giris');
Route::get('oturumac','KullaniciController@index')->name('giris');
Route::get('oturumac','KullaniciController@index')->name('login');
Route::post('/oturumac','KullaniciController@giris_yap')->name('giris_yap');

Route::group(['middleware'=>'auth'],function()
{



    Route::get('/oturumukapat','KullaniciController@oturumukapat')->name('oturumukapat');
    Route::get('/diagiris','DiaController@index')->name('diaindex');
    Route::post('/diagiris','DiaController@giris_yap')->name('diagiris');
    Route::get('/cariler','DiaController@cariler')->name('cariler');
    Route::post('/cariler','DiaController@caricek')->name('caricek');
    Route::post('/cariekle/{firmakodu}/{donemkodu}/{key}','DiaController@cariekle')->name('cariekle');

}
);

