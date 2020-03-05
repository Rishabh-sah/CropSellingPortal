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

// Route::get('/t', function () {
//     return view('auth/login1');
// });
Route::get('/tt', function () {
    return view('auth/resultadmin');
});

//New Working Routes (Multi auth)
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/home',['middleware'=>['auth','admin'],'uses'=>'HomeController@index']);
Route::get('/buyer/home',['middleware'=>['auth','buyer'],'uses'=>'BuyerController@index']);
Route::get('/farmer/home',['middleware'=>['auth','farmer'],'uses'=>'FarmerController@index']);
Route::get('/logistics/home',['middleware'=>['auth','logistics'],'uses'=>'LogisticsController@index']);

Auth::routes();
Route::get('/verify/{token}','VerifyController@verify')->name('verify');
// Route::get('/teacher/home', ['middleware'=>['auth','teacher'],'uses'=>'TestController@index'])->name('home');
Route::get('/registeradmin',['middleware'=>['auth','admin'],'uses'=>'PagesController@index']);
// Route::get('/home', ['middleware'=>['auth','student'],'uses'=>'HomeController@index'])->name('home');
Route::resource('users','TeacherController');
Route::get('/addteacher',['middleware'=>['auth','admin'],'uses'=>'PagesController@addteacher']);
