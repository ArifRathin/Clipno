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

Route::get('/', function () {
    return view('clippino.index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/about', 'HomeController@index')->name('about');
Route::get('/about', function () {
    return view('clippino.about');
})->name('about');

Route::get('/pricing', function () {
    return view('clippino.pricing');
})->name('pricing');

Route::get('/how', function () {
    return view('clippino.how');
})->name('how');

Route::get('/contact', function () {
    return view('clippino.contact');
})->name('contact');

// Route::get('/how', function () {
//     return view('clippino.how');
// })->name('how');

Route::get('trial','TrialOrderController@index')->name('trial');

Route::post('/profileUpdate','UserController\HomeController@user_update');

Route::get('/admin/index',['uses'=>'AdminController\HomeController@index','as'=>'admin','middleware'=>['auth','admin']]);
Route::get('/author/index',['uses'=>'AuthorController\HomeController@index','as'=>'author','middleware'=>['auth','author']]);
Route::get('/user/index',['uses'=>'UserController\HomeController@index','as'=>'user','middleware'=>['auth','user']]);


// Free Trial route
Route::get('free/trial',['uses'=>'FreeContoller\HomeController@showfreetrial','as'=>'free_trial']);
// user Profile Route
Route::get('user/profile/show',['uses'=>'LoginController\HomeController@showuserprofile','as'=>'user_profile','middleware'=>['auth','user']]);
// Place Order Route
Route::get('user/place/order',['uses'=>'LoginController\HomeController@showplaceorder','as'=>'place_order','middleware'=>['auth','user']]);

// FREE TRIAL FORM SUBMIT FOMR
Route::post('/trialOrderSend','TrialOrderController@trial_order_send');