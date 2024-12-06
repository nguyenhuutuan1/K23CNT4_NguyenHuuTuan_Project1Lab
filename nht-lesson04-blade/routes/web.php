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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test', function () {
//    return view('test');
//});

use App\Http\Controllers\NhtProductController;

Route::get('/test', [NhtProductController::class, 'nhtIndex']);

#views
Route::get('/nht-view1/',function(){
    return view('nht-view1',['name'=>"K23CNT4 - Project 1 - Huu Tuan"]);
}); 

Route::get('/nht-view2/',function(){
    return view('nht-view2',[
                'name' =>"K23CNT4 - Project 1 - Huu Tuan",
                'array'=> [1,3,2,6,9]
            ]);
}); 

Route::get('/nht-view2/',function(){
    return view('nht-view2',[
                'name' =>"K23CNT4 - Project 1 - Huu Tuan",
                'array'=> [1,3,2,6,9]
            ]);
}); 

Route::get('/nht-view3/',function(){
    return view('nht-view3',[
                'name'  =>["Nguyen","Huu","Tuan"],
                'arr'   =>[12,22,21,33,55,35],
                'users' =>[]
            ]);
});