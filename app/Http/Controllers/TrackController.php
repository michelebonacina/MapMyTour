<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\Track;
use App\TrackPoint;
use App\TrackSegment;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return view('tracks.create');
    }

    /**
     * Show the form for uploading a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        // go to new track form
        return view('tracks.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrackRequest $request)
    {
        if ($request->hasFile('fileUpload')) {
            // get request params
            $file = $request->file('fileUpload');
            // parse gpx file
            $fileUtility = new GpxFileUtility();
            $gpx = $fileUtility->loadTrackFromFile($file->getPathname());
            // save gpx file data
            DB::transaction(function () use ($gpx) {
                foreach ($gpx->listTracks() as $trackIdx => $gpxTrack) {
                    // create new track
                    $track = new Track();
                    // set track data
                    $track->name = empty($gpxTrack->getName()) ? "New Track " . $trackIdx : $gpxTrack->getName();
                    $track->user_id = Auth::user()->id;
                    // save track
                    $track->save();
                    // load track segments
                    foreach ($gpxTrack->listTrackSegments() as $trackSegmentIdx => $gpxTrackSegment) {
                        // create new track segment
                        $trackSegment = new TrackSegment();
                        // set track segment data
                        $trackSegment->name = $track->name . " " . $trackSegmentIdx;
                        $trackSegment->color = "Black";
                        // save track segment
                        $track->trackSegments()->save($trackSegment);
                        // load track points
                        foreach ($gpxTrackSegment->listTrackPoints() as $gpxTrackPoint) {
                            // create new track point
                            $trackPoint = new TrackPoint();
                            // se track point data
                            $trackPoint->latitude = $gpxTrackPoint->getLatitude();
                            $trackPoint->longitude = $gpxTrackPoint->getLongitude();
                            $trackPoint->altitude = $gpxTrackPoint->getAltitude();
                            $trackPoint->time = $gpxTrackPoint->getTime();
                            // save track point
                            $trackSegment->trackPoints()->save($trackPoint);
                        }
                    }
                }
            });
        }
        // show track list
        return $this->index();
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
}
