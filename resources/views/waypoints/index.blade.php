@extends('layouts.app')

@section('content')

<!-- waypoints buttons bar -->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="{{route('waypoint.create')}}" class="btn btn-success">@lang('waypoint.new')</a>
        </div>
        <div class="col-sm text-right">
            <button type="button" class="btn btn-primary" disabled>@lang('general.switch_map')</button>
            <button type="button" class="btn btn-primary" disabled>@lang('general.filters')</button>
        </div>
    </div>
</div>

<!-- waypoints list table -->
<div class="container mt-1">
    <table class="table table-hover">
        <thead class="bg-dark text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('waypoint.name')</th>
                <th scope="col" class="text-center">@lang('waypoint.latitude')</th>
                <th scope="col" class="text-center">@lang('waypoint.longitude')</th>
                <th scope="col" class="text-center">@lang('waypoint.altitude')</th>
                <th scope="col" class="text-center">&nbsp;</th>
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
                <td class="form-inline">
                    <a href="{{route('waypoint.show', $waypoint->id)}}" class="btn btn-sm btn-primary ml-auto">@lang('general.details')</a>
                    <a href="{{route('waypoint.edit', $waypoint->id)}}" class="btn btn-sm btn-primary ml-1">@lang('general.edit')</a>
                    <form class="ml-1" action="{{route('waypoint.destroy', $waypoint->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Ok to proceed with waypoint \'{{$waypoint->name}}\' deletion?')">@lang('general.delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
