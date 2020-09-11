@extends('layouts.app')

@section('content')

<!-- new waypoint form -->
<div class="container">
    <div class="card">
        <h5 class="card-header bg-dark text-light">@lang('waypoint.new')</h5>
        <div class="card-body">
            <form method="POST" action="{{route('waypoint.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">@lang('waypoint.name')</label>
                    <input type="text" required class="form-control" id="name" name="name" value="{{old('name')}}"
                        autofocus aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">@lang('waypoint.name.descr')</small>
                </div>
                <div class="form-group">
                    <label for="latitude">@lang('waypoint.latitude')</label>
                    <input type="number" step="any" min="-90" max="90" required class="form-control" id="latitude"
                        name="latitude" value="{{old('latitude')}}" aria-describedby="latitudeHelp">
                    <small id="latitudeHelp" class="form-text text-muted">@lang('waypoint.latitude.descr')</small>
                </div>
                <div class="form-group">
                    <label for="longitude">@lang('waypoint.longitude')</label>
                    <input type="number" step="any" min="-180" max="180" required class="form-control" id="longitude"
                        name="longitude" value="{{old('longitude')}}" aria-describedby="longitudeHelp">
                    <small id="longitudeHelp" class="form-text text-muted">@lang('waypoint.longitude.descr')</small>
                </div>
                <div class="form-group">
                    <label for="altitude">@lang('waypoint.altitude')</label>
                    <input type="number" class="form-control" id="altitude" name="altitude" value="{{old('altitude')}}"
                        aria-describedby="altitudeHelp">
                    <small id="altitudeHelp" class="form-text text-muted">@lang('waypoint.altitude.descr')</small>
                </div>
                <button type="submit" class="btn btn-success">@lang('general.add')</button>
                <a href="{{route('waypoint.index')}}" class="btn btn-secondary">@lang('general.cancel')</a>
            </form>
        </div>
    </div>
</div>

@endsection
