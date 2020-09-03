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

// waypoints routes
Route::group(
    [
        'prefix' => 'waypoints'
    ],
    function() {
        // list waypoints
        Route::get('/', 'WaypointController@index')->name('waypoint.home');
        Route::get('/index', 'WaypointController@index')->name('waypoint.index');
        // show waypoints details
        Route::get('/{waypoint}', 'WaypointController@show')->where('waypoint', '[0-9]+')->name('waypoint.show');
        // show new waypoint form
        Route::get('/create', 'WaypointController@create')->name('waypoint.create');
        // add new waypoint
        Route::post('/', 'WaypointController@store')->name('waypoint.store');
        // show edit waypoint form
        Route::get('/{waypoint}/edit', 'WaypointController@edit')->where('waypoint', '[0-9]+')->name('waypoint.edit');
        // update existing waypoint 
        Route::patch('/{waypoint}', 'WaypointController@update')->where('waypoint', '[0-9]+')->name('waypoint.update');
        // delete existing waypoint 
        Route::delete('/{waypoint}', 'WaypointController@destroy')->where('waypoint', '[0-9]+')->name('waypoint.destroy');
    }
);

