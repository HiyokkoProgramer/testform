<?php
use App\Http\Middleware\HelloMiddleware;
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
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/form/confirm','Formcontroller@confirm');

Route::post('/form/complete','Formcontroller@store');

//Route::get('hello',function(){
//    return '<html><body><h1>Hello</h1><p>sample page</p></body></html>';
//});

Route::get('hello','HelloController@index');
//    ->middleware('hello');


Route::post('hello','HelloController@post');

//DB::insertによるレコード追加
Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@create');

//DB::updateによるレコード追加
Route::get('hello/edit','HelloController@edit');
Route::post('hello/edit','HelloController@update');