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
    return view('welcome');
});

Route::get('/coba', function() {
    return 'hello';
});

Route::prefix('admin')->group(function (){
    Route::get('/user', function (){
        return 'admin user';
    });

    Route::get('/admins', function (){
        return 'admin admin';
    });

});

Route::get('/user/{name}', function ($name) {
    return 'hai '.$name;
});

Route::get('/posts/{posts}/comments/{comments}', function($postId, $commentId){
    return 'saya ada di post: '. $postId. 'komen ke: '.$commentId;
});

Route::get('/user/{name}', function ($name) {
    return 'selamat datang : ' .$name;
})->where('name', '[A-Za-z \']{3,}');
