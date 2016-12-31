<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

//Route::get('users', function(){
//    return 'users';
//});


// 매개변수 뒤에 물음표를 넣어서 선택적으로 읽어갈 수 있도록 설정할 수 있다
Route::get('users/{id?}', 'UserController@getIndex')
    ->where('id', '[0-9]+'); // 이와 같이 매개변수의 타입을 설정할 수 있다 (숫자만 허용)


Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    // todo 로그인이 안되어 있을 경우 자동으로 로그인으로 이동하는데, 로그인을 페이지에서 어떻게 로그인 처리를 자연스럽게 라라벨이 해주는가?
    Route::get('home', [
        'as' => 'dashboard',
        'users' => 'UserController@getIndex'
    ]);

});