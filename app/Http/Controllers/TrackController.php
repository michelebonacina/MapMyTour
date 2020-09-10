<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = Track::orderBy('name');
        $queryBuilder->where('user_id', Auth::user()->id);
        $tracks = $queryBuilder->get();
        // go to track list view
        return view('tracks.index')->with(['tracks' => $tracks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // go to new track form
        return view('tracks.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create the new track
        $track = new Track();
        // set track data
        $track->name = $request->input('name');
        $track->user_id = Auth::user()->id;
        // save track
        $track->save();
        // show track list
        return redirect()->route('track.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        // go to tracks show view
        return view('tracks.show')->with(['track' => $track]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        // go to tracks edit view
        return view('tracks.edit')->with(['track' => $track]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        // set track data
        $track->name = $request->input('name');
        // save track
        $track->save();
        // show track list
        return redirect()->route('track.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        // delete track
        $res = $track->delete();
        // show track list
        return redirect()->route('track.index');
    }
}
