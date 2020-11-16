<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//設定 Route 回傳字串
//Route::get('/', function () {
//    return 'welcome';
//});
//設定 Route 跳轉頁面
//Route::get('/', function()
//{ return redirect('r1'); });
//Route::get('r1', function()
//{ return redirect('r2'); });
//Route::get('r2', function()
//{ return view('welcome'); });
//修改 Route 接受參數
//Route::get('hello/{name}',function($name){
//    return 'Hello,'.$name;
//});
//修改參數成選擇性
//Route::get('hello/{name?}',function($name='Everybody'){
//    return 'Hello,'.$name;
//});
//將 Route 取名為 hello.index
//Route::get('hello/{name?}', function ($name='Everybody') {
//    return 'Hello, '.$name;
//})->name('hello.index');
////設定 dashboard路徑的 Route
//Route::get('dashboard',function(){
//    return 'dashboard';
//});
//設定另一個 Route 以群組包起來設定 prefix
//Route::group(['prefix'=>'admin'],function(){
//    Route::get('dashboard',function(){
//        return 'admin dashboard';
//    });
//});
Route::get('/', [HomeController::class, 'index'])->name('hello.index');

