<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , function () {
    return view('welcom');
});

#redirect
Route::redirect('/here','/three');

Route::get('/three' , function () {
    return "<h1>redirect to three </h1>";
}); 

#router return view
Route::get('/huu-tuan', function(){
    return view('huutuan'); 
});

#router parameter
Route::get('/devmaster/{id}',function($id){
    return "<h1> Devmaster ".$id ."</h1>";
});

#Optional parameter
Route::get('/dev/{name?}',function($name="Huu Tuan"){
    return "<h1> Xin chao ".$name ."</h1>";
});

#router expression constraints
Route::get('/user-constraint/{name}', function ($name) {
    return "<h1> Router Constraint [A-Za-z]+</h1>";
})->where('name', '[A-Za-z ]+');

Route::get('/user-constraint/{id}', function ($id) {
    return "<h1> Router Constraint [0-9]+</h1>";
})->where('id', '[0-9]+');

Route::get('/user-constraint/{id}/{name}', function ($id, $name) {
    return "<h1> Router Constraint ['id'=> '[0-9]+','name' => '[a-z]+']</h1>";
})->where(['id'=> '[0-9]+', 'name' =>'[a-z ]+']);

Route::get('/user-check/{id}/{name}', function ($id, $name) {
    return "<h1> user-checl whereNumber('id')->whereAlpha('name') [$id, $name]</h1>";
})->whereNumber('id')->whereAlpha('name');

Route::get('/user-check/{name}', function ($name) {
    return "<h1> user-check whereAlphaNumeric('name') => [$name]</h1>";
})->whereAlphaNumeric('name');

Route::get('/user-check/{id}', function ($id) {
    return "<h1> user-check whereUuid('id') => [$id]</h1>";
})->whereUuid('id');

#Encoded Forward Slashes
Route::get('/search/{search}', function ($search) {
    return "<h1> Tham số trên url là unicode: $search </h1>";
})->where('search', '.*');

#name router
Route::get('/name/profile', function () {
    return "<h1> Đặt tên cho route </h1>";
})->name('named.profile');

Route::get('/named/display', [NamedProfileController::class, 'display'])->name('display.profile');

Route::get('/named/show', [NamedProfileController::class, 'show']);

#router group prefix
Route::group(['prefix'=>'admin'],function() {
    Route::get('/',function(){ return "<h1> Admin Home </h1>";});
    Route::get('/account',function(){ return "<h1> Admin Account </h1>";});
    Route::get('/product',function(){ return "<h1> Admin product </h1>";});
});