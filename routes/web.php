<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/data', function(){
    $arr2=array(1,2,3,4,5,6,7,8,9,10);
    $arr=[
        "original_data"=>[
        'name'=>'Nguyen Van A',
        'age'=>20,
        'data'=>$arr2,
        
        
    ]];
    return $arr;
});