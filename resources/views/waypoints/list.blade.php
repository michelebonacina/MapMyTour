@extends('layouts.app')

@section('content')

<!-- waypoints buttons bar -->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#newWaypointCollapse" aria-expanded="false" aria-controls="collapseExample">New Waypoint</button>
        </div>
        <div class="col-sm text-right">
            <button type="button" class="btn btn-primary" disabled>Switch to Map</button>
            <button type="button" class="btn btn-primary" disabled>Filters</button>
        </div>
    </div>
</div>

<! new waypoint form -->
<div class="container">
    <div id="newWaypointCollapse" class="collapse my-2">
        <div class="card card-body">
            <form method="POST" action="{{route('waypoint.new')}}">
                @csrf
                <div class="form-row">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="latitude" class="form-control" placeholder="Latitude">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="longitude" class="form-control" placeholder="Longitude">
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="altitude" class="form-control" placeholder="Altitude">
                    </div>
                    <div class="col-md-1 text-right">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@if (count($errors) > 0)
<script>
    window.$('document').ready(function () {
        window.$('#newWaypointCollapse').collapse('show');
    });
</script>
@endif

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
