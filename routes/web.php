<?php

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
use App\Http\Middleware\CheckAdmin;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('generate_pdf','HomeController@generatePDF');

// Route::get('admin/profile', function () {
//     return 'string';
// })->middleware('auth');

Route::get('admin/profile', function () {
    //
})->middleware('admin');

Route::get('get_user_api', 'HomeController@getUserAPI');
