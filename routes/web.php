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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// show result table properties Here 
//Route::get('proper',function(){
//$result = DB::select('select * from properties limit 10');

//return $result;
//});


// show data = keyword ايجار
 use App\propertie;
// Route::get('rent','properties@index'(){
//     $find = propertie::where('title' ,'like','% للأيجار%')->orderBy('id')->take(10)->get();
//     return $find;
//     });
    

  Route::get('rent/{id}','properties@index');
        





