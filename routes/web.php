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

Route::group(['middleware'=>['web','auth']],function(){
    Route::get('/home', function () {
    if(Auth::user()->token!=null){
        return redirect('/')->with('status','please verify your email account');
    }
    else if(Auth::user()->role==1){
        return view('auth/home');
    }
    else if(Auth::user()->role==2){
        return view('teacher/home');
    }
    else{
        return view('home');
    }
    })->name('home');
    
});
Auth::routes();
Route::get('/verify/{token}','VerifyController@verify')->name('verify');
// Route::get('/teacher/home', ['middleware'=>['auth','teacher'],'uses'=>'TestController@index'])->name('home');
Route::get('/registeradmin',['middleware'=>['auth','admin'],'uses'=>'PagesController@index']);
// Route::get('/home', ['middleware'=>['auth','student'],'uses'=>'HomeController@index'])->name('home');
Route::resource('users','TeacherController');
Route::get('/addteacher',['middleware'=>['auth','admin'],'uses'=>'PagesController@addteacher']);
Route::post('/qualitative',['middleware'=>['auth','student'],'uses'=>'QualitativeController@store']);
Route::get('/qualitative',['middleware'=>['auth','student'],'uses'=>'QuestionsController@qualitative']);

Route::get('/comprehension',['middleware'=>['auth','student'],'uses'=>'QuestionsController@comprehension']);
Route::post('/comprehension',['middleware'=>['auth','student'],'uses'=>'ComprehensionController@store']);

Route::post('/analytical',['middleware'=>['auth','student'],'uses'=>'AnalyticalController@store']);
Route::get('/analytical',['middleware'=>['auth','student'],'uses'=>'QuestionsController@analytical']);

Route::post('creativity',['middleware'=>['auth','student'],'uses'=>'CreativityController@store']);
Route::get('creativity',['middleware'=>['auth','student'],'uses'=>'QuestionsController@creativity']);

Route::get('/final', function () {
    return view('final');
})->name('final');

Route::post('/final', function () {
    return view('final');
})->name('final');