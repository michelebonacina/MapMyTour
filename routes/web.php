<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('root');
Route::get('/home', 'HomeController@index')->name('home');

// waypoints routes
Route::group(
    [
        'prefix' => 'waypoints',
        'middleware' => ['auth', 'verified']
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

// track routes
Route::group(
    [
        'prefix' => 'tracks',
        'middleware' => ['auth', 'verified']
    ],
    function() {
        // list tracks
        Route::get('/', 'TrackController@index')->name('track.home');
        Route::get('/index', 'TrackController@index')->name('track.index');
        // show track details
        Route::get('/{track}', 'TrackController@show')->where('track', '[0-9]+')->name('track.show');
        // show new track form
        Route::get('/create', 'TrackController@create')->name('track.create');
        // show upload track form
        Route::get('/upload', 'TrackController@upload')->name('track.upload');
        // add new track
        Route::post('/', 'TrackController@store')->name('track.store');
        // show edit track form
        Route::get('/{track}/edit', 'TrackController@edit')->where('track', '[0-9]+')->name('track.edit');
        // update existing track
        Route::patch('/{track}', 'TrackController@update')->where('track', '[0-9]+')->name('track.update');
        // delete existing track
        Route::delete('/{track}', 'TrackController@destroy')->where('track', '[0-9]+')->name('track.destroy');
    }
);
