<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Waypoints routes
Route::group(
    [
        'prefix' => 'waypoints'
    ],
    function() {
        Route::get('/', 'WaypointController@index')->name('waypoint.home');             // list waypoints
        Route::get('/index', 'WaypointController@index')->name('waypoint.index');       // list waypoints
        Route::get('/create', 'WaypointController@create')->name('waypoint.create');    // show new waypoint form
        Route::post('/store', 'WaypointController@store')->name('waypoint.store');      // add new waypoint
    }
);

