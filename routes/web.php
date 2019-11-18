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
// Route::get('/server', function () {
//     return view('addserver');
// });
Route::get('/network', function () {
    return view('addnetworkdevice');
});
Route::get('/rooms', function() {
    $rooms = \App\Room::with(['location' => function($query) {
                            $query->with('building');
                        }])
                        ->where('name', 'like', '%' . request()->input('name') . '%')
                        ->get();
    return $rooms;
});
Route::get('/ups', function () {
    return view('addups');
});
Route::get('/ns', function () {
    return view('addnetworkedstorage');
});
Route::get('/ac', 'Airconditionercontroller@index');
Route::post('/store',function(Illuminate\Http\Request $request){
    return $request->all();
});
Route::get('/server','Servercontroller@index');