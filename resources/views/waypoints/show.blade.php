@extends('layouts.app')

@section('content')

<!-- new waypoint form -->
<div class="container">
    <div class="card my-1">
        <h5 class="card-header bg-dark text-light">@lang('waypoint.details')</h5>
        <div class="card-body">
            <div class="container">
                <div class="row border-bottom mb-2">
                    <div class="col-sm">
                        <span class="font-weight-bold">{{$waypoint->name}}</span>
                        <small class="form-text text-muted">@lang('waypoint.name')</small>
                    </div>
                </div>
                <div class="row border-bottom mb-2">
                    <div class="col-sm">
                        <span class="font-weight-bold">{{$waypoint->latitude}}</span>
                        <small class="form-text text-muted">@lang('waypoint.latitude')</small>
                    </div>
                    <div class="col-sm">
                        <span class="font-weight-bold">{{$waypoint->longitude}}</span>
                        <small class="form-text text-muted">@lang('waypoint.longitude')</small>
                    </div>
                    <div class="col-sm">
                        <span class="font-weight-bold">{{$waypoint->altitude}}</span>
                        <small class="form-text text-muted">@lang('waypoint.altitude')</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container form-inline">
    <a href="{{route('waypoint.index')}}" class="btn btn-primary ml-1">@lang('general.back')</a>
    <a href="{{route('waypoint.edit', $waypoint->id)}}" class="btn btn-primary ml-1">@lang('general.edit')</a>
    <form class="ml-1" action="{{route('waypoint.destroy', $waypoint->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('Ok to proceed with waypoint \'{{$waypoint->name}}\' deletion?')">@lang('general.delete')</button>
    </form>
</div>

@endsection
