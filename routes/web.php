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
    $content = App\Models\Crud::all();
    return view('home')->with('content',$content);
});

Route::get('/edit/{id}', function ($id){
  $content = App\Models\Crud::findOrFail($id);
  return view('edit')->with('content', $content);
});

Route::get('/add', function ()
{
  return view('add');
});

Route::post('/add', 'App\Http\Controllers\CrudController@store');
Route::post('/edit/{id}', 'App\Http\Controllers\CrudController@update');
Route::delete('/delete/{id}', 'App\Http\Controllers\CrudController@destroy');
