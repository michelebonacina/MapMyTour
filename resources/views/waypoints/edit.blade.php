@extends('layouts.app')

@section('content')

<!-- new waypoint form -->
<div class="container">
    <div class="card">
        <h5 class="card-header">Edit Waypoint</h5>
        <div class="card-body">
            <form method="POST" action="{{route('waypoint.update', $waypoint->id)}}" \>
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{$waypoint->id}}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required class="form-control" id="name" name="name" autofocus
                        aria-describedby="nameHelp" value="{{$waypoint->name}}">
                    <small id="nameHelp" class="form-text text-muted">The name of the waypoint.</small>
                </div>
                <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="number" step="any" min="-90" max="90" required class="form-control" id="latitude"
                        name="latitude" aria-describedby="latitudeHelp" value="{{$waypoint->latitude}}">
                    <small id="latitudeHelp" class="form-text text-muted">The latitude coordinate of the waypoint.
                        Between -90 and +90.</small>
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="number" step="any" min="-180" max="180" required class="form-control" id="longitude"
                        name="longitude" aria-describedby="longitudeHelp" value="{{$waypoint->longitude}}">
                    <small id="longitudeHelp" class="form-text text-muted">The longitude coordinate of the waypoint.
                        Between -180 and +180.</small>
                </div>
                <div class="form-group">
                    <label for="altitude">Altitude</label>
                    <input type="number" class="form-control" id="altitude" name="altitude"
                        aria-describedby="altitudeHelp" value="{{$waypoint->altitude}}">
                    <small id="altitudeHelp" class="form-text text-muted">The altitude of the waypoint. In
                        meters.</small>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{route('waypoint.index')}}" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
