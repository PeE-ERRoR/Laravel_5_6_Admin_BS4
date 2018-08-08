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

// API
Route::get('get_user_api', 'HomeController@getUserAPI');

Route::resource('profile', 'UserController')->middleware('auth');
Route::resource('post', 'PostController')->middleware('auth');

Route::get('hello', function () {
  return abort(404);
    // return response('Hello World', 200)
    //               ->header('Content-Type', 'text/plain');

});

// facebook
Route::get('/facebook/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/facebook/callback', 'SocialAuthFacebookController@callback');
// google
Route::get('/google/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/google/callback', 'SocialAuthGoogleController@callback');

Route::get('/home', 'HomeController@index')->name('home');
