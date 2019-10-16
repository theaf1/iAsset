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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('addperipherals');
});
Route::get('/computer', function () {
    return view('addcomputer');
});
Route::get('/storage', function () {
    return view('addstorageperipherals');
});
Route::get('/server', function () {
    return view('addserver');
});

Route::get('/rooms', function() {
    // \Log::info(request()->input('name'));
    $list[] = ['value' => 'Abc', 'data' => '1'];
    $list[] = ['value' => 'Ant', 'data' => 'Ant'];
    $list[] = ['value' => 'Def', 'data' => 'Def'];
    return $list;
});