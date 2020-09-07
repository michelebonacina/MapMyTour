<?php

namespace App\Http\Controllers;

use App\Http\Requests\WaypointRequest;
use App\Models\Waypoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaypointController extends Controller
{

    /**
     * Create a new waypoint controller.
     */
    public function __construct()
    {
        // inizialize authorizations
        $this->authorizeResource(Waypoint::class, 'waypoint');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = Waypoint::orderBy('name');
        $queryBuilder->where('user_id', Auth::user()->id);
        $waypoints = $queryBuilder->get();
        // go to waypoints list view
        return view('waypoints.index')->with(['waypoints' => $waypoints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // go to new waypoint form
        return view('waypoints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WaypointRequest $request)
    {
        // create the new waypoint
        $waypoint = new Waypoint();
        // set waypoint data
        $waypoint->name = $request->input('name');
        $waypoint->latitude = $request->input('latitude');
        $waypoint->longitude = $request->input('longitude');
        $waypoint->altitude = $request->input('altitude');
        $waypoint->user_id = Auth::user()->id;
        // save waypoint
        $waypoint->save();
        // show waypoint list
        return redirect()->route('waypoint.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function show(Waypoint $waypoint)
    {
        // go to waypoints show view
        return view('waypoints.show')->with(['waypoint' => $waypoint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Waypoint $waypoint)
    {
        // go to waypoints edit view
        return view('waypoints.edit')->with(['waypoint' => $waypoint]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function update(WaypointRequest $request, Waypoint $waypoint)
    {
        // set waypoint data
        $waypoint->name = $request->input('name');
        $waypoint->latitude = $request->input('latitude');
        $waypoint->longitude = $request->input('longitude');
        $waypoint->altitude = $request->input('altitude');
        // save waypoint
        $waypoint->save();
        // show waypoint list
        return redirect()->route('waypoint.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Waypoint  $waypoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waypoint $waypoint)
    {
        // delete waypoint
        $res = $waypoint->delete();
        // show waypoint list
        return redirect()->route('waypoint.index');
    }
}
