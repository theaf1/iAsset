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
Route::get('/computer', 'ClientController@index');
Route::get('/peripherals','PeripheralsController@index');
Route::get('/storage', 'StorageperipheralsController@index');
Route::get('/server','ServerController@index');
Route::get('/network', 'NetworkdeviceController@index');
Route::get('/ns', 'NetworkedstorageController@index');
Route::get('/ups', 'UpsController@index');
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
Route::post('/store', 'SectionController@store');
Route::post('/add-networkdev','Networkdevicecontroller@store');
//under development
Route::get('/admin', 'SectionController@index');
Route::post('/add-computer', 'ClientController@store');
<<<<<<< HEAD

Route::get('/add-display', function () {
    $displayCount = request()->input('display_count');
    return redirect()->back()->with('displayCount', $displayCount)->withInput();
});
=======
Route::post('add-ups', 'UpsController@store');
>>>>>>> 1b0d7faad227569de16e52bc89b107d8a197b5c7
