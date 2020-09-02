@extends('layouts.app')

@section('content')

<!-- waypoints buttons bar -->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="{{route('waypoint.create')}}" class="btn btn-success">New Waypoint</a>
        </div>
        <div class="col-sm text-right">
            <button type="button" class="btn btn-primary" disabled>Switch to Map</button>
            <button type="button" class="btn btn-primary" disabled>Filters</button>
        </div>
    </div>
</div>

<!-- waypoints list table -->
<div class="container mt-1">
    <table class="table table-hover">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">Latitude</th>
                <th scope="col" class="text-center">Longitude</th>
                <th scope="col" class="text-center">Altitude</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($waypoints as $waypoint)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$waypoint->name}}</td>
                <td class="text-right">{{$waypoint->latitude}}</td>
                <td class="text-right">{{$waypoint->longitude}}</td>
                <td class="text-right">{{$waypoint->altitude}}</td>
            </tr>
            @endforeach            
        </tbody>
    </table>
</div>

@endsection
