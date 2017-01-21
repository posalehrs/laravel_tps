<?php

Route::get('/', function () {
    return redirect('login');
});

Route::get('login',['as'=>'getLogin','uses'=>'Auth\LoginController@getLogin']);

Route::post('login',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);

Route::get('change-password',['as'=>'getChanePassword','uses'=>'Auth\ChangePasswordController@getChangePassword']);

Route::post('change-password',['as'=>'postChanePassword','uses'=>'Auth\ChangePasswordController@postChangePassword']);

Route::get('logout',function(){
    \Auth::logout();
    return redirect('login');
});

Route::get('list-course',['as'=>'getCourse','uses'=>'CourseController@index']);

Route::get('list-user',['as'=>'getUser','uses'=>'UserController@index']);