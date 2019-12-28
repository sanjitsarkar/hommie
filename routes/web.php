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





Route::group([
    'prefix'=>'admin', 'middleware'=>'auth'],
    function()
    {

        //Hostels
        Route::get('/hostels',
    [

'uses'=>'HostelsController@index',
'as'=>'hostel.index'
    ]);
    Route::get('/hostel/edit/{id}',
    [

'uses'=>'HostelsController@edit',
'as'=>'hostel.edit'
    ]);
    Route::get('/hostel/delete/{id}',
    [

'uses'=>'HostelsController@destroy',
'as'=>'hostel.delete'
    ]);
    Route::post('/hostel/update/{id}',
    [

'uses'=>'HostelsController@update',
'as'=>'hostel.update'
    ]);
Route::post('/hostel/add',
    [

'uses'=>'HostelsController@store',
'as'=>'hostel.add'
    ]);
    Route::get('/hostel/create',
    [

'uses'=>'HostelsController@create',
'as'=>'hostel.create'
    ]);
//Beds

Route::get('/beds/{hostel_name}/{id}',
[

'uses'=>'BedsController@index',
'as'=>'bed.index'
]);
Route::get('/bed/{hostel_name}/{room_no}/',
[

'uses'=>'BedsController@display',
'as'=>'bed.display'
]);
Route::get('/bed/edit/{hostel_name}/{id}/{bed_no}',
[

'uses'=>'BedsController@edit',
'as'=>'bed.edit'
]);
Route::get('/bed/delete/{hostel_name}/{id}/{bed_no}',
[

'uses'=>'BedsController@destroy',
'as'=>'bed.delete'
]);
Route::post('/bed/add',
[

'uses'=>'BedsController@store',
'as'=>'bed.add'
]);
    //Rooms
    Route::get('/rooms/{id}',
    [

'uses'=>'RoomController@index',
'as'=>'room.index'
    ]);
    Route::get('/rooms/details/{host}',
    [

'uses'=>'RoomController@display',
'as'=>'room.display'
    ]);
    Route::post('/room/add',
    [

'uses'=>'RoomController@store',
'as'=>'room.add'
    ]);
    Route::get('/room/edit/{hostel_name}/{id}',
    [

'uses'=>'RoomController@edit',
'as'=>'room.edit'
    ]);
    //Home

    Route::get('/home', 'HomeController@index')->name('home');

    }
);
Route::get('/', function()
{
return view('index');
});
Route::get('/search',
[
'uses'=>'FrontEndController@search',
'as'=>'search'
]
);
Route::get('/hostel/boooking/{name}',
[

'uses'=>'FrontEndController@book',
'as'=>'hostel.book'
]);
Route::get('book/{ host }/{ room_no }/',
[

'uses'=>'FrontEndController@bookroom',
'as'=>'room.book'
]);

Auth::routes();






