@extends('layouts.app')

@section('content')

<!-- new waypoint form -->
<div class="container">
    <div class="card">
        <h5 class="card-header bg-dark text-light">@lang('waypoint.edit')</h5>
        <div class="card-body">
            <form method="POST" action="{{route('waypoint.update', $waypoint->id)}}">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{$waypoint->id}}">
                <div class="form-group">
                    <label for="name">@lang('waypoint.name')</label>
                    <input type="text" required class="form-control" id="name" name="name" autofocus
                        aria-describedby="nameHelp" value="{{old('name', $waypoint->name)}}">
                    <small id="nameHelp" class="form-text text-muted">@lang('waypoint.name.descr')</small>
                </div>
                <div class="form-group">
                    <label for="latitude">@lang('waypoint.latitude')</label>
                    <input type="number" step="any" min="-90" max="90" required class="form-control" id="latitude"
                        name="latitude" aria-describedby="latitudeHelp" value="{{old('latitude', $waypoint->latitude)}}">
                    <small id="latitudeHelp" class="form-text text-muted">@lang('waypoint.latitude.descr')</small>
                </div>
                <div class="form-group">
                    <label for="longitude">@lang('waypoint.longitude')</label>
                    <input type="number" step="any" min="-180" max="180" required class="form-control" id="longitude"
                        name="longitude" aria-describedby="longitudeHelp" value="{{old('longitude', $waypoint->longitude)}}">
                    <small id="longitudeHelp" class="form-text text-muted">@lang('waypoint.longitude.descr')</small>
                </div>
                <div class="form-group">
                    <label for="altitude">@lang('waypoint.altitude')</label>
                    <input type="number" class="form-control" id="altitude" name="altitude"
                        aria-describedby="altitudeHelp" value="{{old('altitude', $waypoint->altitude)}}">
                    <small id="altitudeHelp" class="form-text text-muted">@lang('waypoint.altitude.descr')</small>
                </div>
                <button type="submit" class="btn btn-success">@lang('general.save')</button>
                <a href="{{route('waypoint.index')}}" class="btn btn-primary">@lang('general.cancel')</a>
            </form>
        </div>
    </div>
</div>

@endsection
