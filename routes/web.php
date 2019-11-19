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
// route to  system views
Route::get('/computer', 'clientcontroller@index');
Route::get('/peripherals','Peripheralcontroller@index');
Route::get('/storage', 'Storageperipherals@index');
Route::get('/server','Servercontroller@index');
Route::get('/network', 'Networkdevicecontroller@index');
Route::get('/ns', 'Networkstoragecontroller@index');
Route::get('/ups', 'Upscontroller@index');
Route::get('/ac', 'Airconditionercontroller@index');
// room automation script by Nongnapat
Route::get('/rooms', function() {
    $rooms = \App\Room::with(['location' => function($query) {
                            $query->with('building');
                        }])
                        ->where('name', 'like', '%' . request()->input('name') . '%')
                        ->get();
    return $rooms;
});
//database operations
Route::post('/store',function(Illuminate\Http\Request $request){
    return $request->all();
});