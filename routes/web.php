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

Route::view('/', 'welcome');

Route::get('/test/{id}',function($id){
    return $id;
});

Route::get('/test2/{id}',function($id){
    return $id;
});
Route::get('/test3/{id?}',function(){
    return 'welcome';
});



Route::namespace('Front')->group(function (){
    Route::get('/about',function (){
        return 'hello_about'; });

    });


Route::get('log','Controller@getview');

Route::get('landing','Controller@tgeland');











Route::get('/aboutme',function (){
    return view('aboutme');
});
Route::post('/username', function () {return view('mustafa');});
Route::view('indix','mustafa');

Route::view('contact','contact',[
    'page_name'=>'contact',
    'page_description'=>'description_me'
]);

Auth::routes();



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verify');
