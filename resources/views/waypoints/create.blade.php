@extends('layouts.app')

@section('content')

<!-- new waypoint form -->
<div class="container">
    <div class="card">
        <h5 class="card-header bg-primary text-light">Add new Waypoint</h5>
        <div class="card-body">
            <form method="POST" action="{{route('waypoint.store')}}" \>
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" required class="form-control" id="name" name="name" value="{{old('name')}}"
                        autofocus aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">The name of the waypoint.</small>
                </div>
                <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="number" step="any" min="-90" max="90" required class="form-control" id="latitude"
                        name="latitude" value="{{old('latitude')}}" aria-describedby="latitudeHelp">
                    <small id="latitudeHelp" class="form-text text-muted">The latitude coordinate of the waypoint.
                        Between -90 and +90.</small>
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="number" step="any" min="-180" max="180" required class="form-control" id="longitude"
                        name="longitude" value="{{old('longitude')}}" aria-describedby="longitudeHelp">
                    <small id="longitudeHelp" class="form-text text-muted">The longitude coordinate of the waypoint.
                        Between -180 and +180.</small>
                </div>
                <div class="form-group">
                    <label for="altitude">Altitude</label>
                    <input type="number" class="form-control" id="altitude" name="altitude" value="{{old('altitude')}}"
                        aria-describedby="altitudeHelp">
                    <small id="altitudeHelp" class="form-text text-muted">The altitude of the waypoint.</small>
                </div>
                <button type="submit" class="btn btn-success">Add</button>
                <a href="{{route('waypoint.index')}}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
