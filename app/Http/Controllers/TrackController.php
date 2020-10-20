<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MicheleBonacina\PhpGpxLib\GpxFileUtility;

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
    public function store(TrackRequest $request)
    {
        // create the new track
        $track = new Track();
        // set track data
        $track->name = $request->input('name');
        $track->user_id = Auth::user()->id;
        // process gpx file
        $this->processGpxFile($track, $request);
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
    public function update(TrackRequest $request, Track $track)
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

    /**
     * Process GPX file and create segments and points.
     *
     * @param Track $track
     * @param Request $request
     * @return void
     */
    private function processGpxFile(Track &$track, Request $request)
    {
        // TODO
        if ($request->hasFile('trackUpload'))
        {
            $file = $request->file('trackUpload');
            $fileUtility = new GpxFileUtility();
            $gpx = $fileUtility->loadTrackFromFile($file->getPathname());
            dd($gpx);
            ;
        }
    }
}
