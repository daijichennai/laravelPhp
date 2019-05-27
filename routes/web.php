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
Route::get('/', function () {
    return view('login');
});

// Route::get('/user', function () {
//     return view('userMaster.listUser');
// });

Route::get('/user','UsersController@index'); 


// Route::get('/user/{userID}', function () {
//     return view('userMaster.listUser');
// });

Route::get('/addEditUser/{cmode}', function () {
    //return view('userMaster.dashboard');
    return View::make('userMaster.addEditUser');
});

Route::get('/addEditUser/{cmode}/userID', function () {
    //return view('userMaster.dashboard');
    return View::make('userMaster.addEditUser');
});

Route::get('/dashboard', function () {
    //return view('userMaster.dashboard');
    return View::make('userMaster.dashboard');
});