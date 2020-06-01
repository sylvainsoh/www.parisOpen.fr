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
    $maintenance=1;
    if ($maintenance==0){
        return view('maintenance');
    }else{
        $uploads=\App\upload::paginate(6);
        return view('welcome',compact('uploads'));
    }


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api/{id}', 'UploadController@api')->name('api');
Route::get('/consulter/{id}', 'UploadController@consulter')->name('consulter');
Route::get('/telecharger/{id}', 'UploadController@telecharger')->name('telecharger');
Route::post('/addUpload', 'UploadController@store')->name('addUpload');
Route::post('/import', 'UploadController@importExel')->name('importExel');
Route::post('/rechercher', 'UploadController@rechercher')->name('rechercher');
