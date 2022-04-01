<?php

//use App\Http\Controllers\Controller;
use App\Http\Controllers\TestController; // this is must having for Each route inLaravel 9
//use App\Http\Controllers;
//use Illuminate\Support\Facades\Route;
//use Barryvdh\Debugbar\Facedes\Debugbar;
//use Barryvdh\Debugbar\Twig\Extension\Debug;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SalesInvoiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(LoginController::class)->group(function(){
    Route::get('login','login')->name('login');
    Route::post('check','authentication')->name('login_check');
    Route::get('logout','logout')->name('logout');
});
Route::group(['middleware'=>'auth'],function(){
    Route::controller(GroupController::class)->group(function(){ // this is for not for resource
        Route::get('group','index');
        Route::get('group/create','create');
        Route::post('group','store');
        Route::delete('group/{id}','delete');
    });
    Route::resource('users',UserController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('products',ProductController::class);

    Route::get('sal',[SalesController::class, 'index']);
    Route::get('sales/{id}',[SalesInvoiceController::class, 'index'])->name('user_sales');
});



/*
Route::group(['middleware'=>'auth'],function(){

    Route::get('group','groupController@index');
    Route::get('group/create','groupController@create');
    Route::post('group','groupController@store');
    //Route::get('group/{id}','groupController@delete'); //for delete --- <a href="{{url('group/'.$grop->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>   
    Route::delete('group/{id}','groupController@delete'); 
      
    Route::resource('users','userController');
    Route::resource('category','categoryController',['except' => ['show']]);
});*/

//Route::get('group','groupController@index');
//Route::get('group/create','groupController@create');
//Route::post('group','groupController@store');
//Route::get('group/{id}','groupController@delete'); //for delete --- <a href="{{url('group/'.$grop->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>   
//Route::delete('group/{id}','groupController@delete'); 


//Route::resource('products','productController');

//Route::get('login','Auth\loginController@login')->name('login');
//Route::post('login_action','Auth\loginController@authentication')->name('login_action');
//Route::get('logout','Auth\loginController@logout')->name('logout');

// Route::resource('users',[UserController::class]); // evabe error asbe array to string error

//Route::get('test','TestController@index'); // this is not working in laravel 9
//Route::get('test', [TestController::class, 'index']); // $this route system is for laravel 9 ;






