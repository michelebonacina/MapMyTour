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
                <td class="text-right form-inline">
                    <a href="{{route('waypoint.show', $waypoint->id)}}" class="btn btn-primary ml-1">Details</a>
                    <a href="{{route('waypoint.edit', $waypoint->id)}}" class="btn btn-primary ml-1">Edit</a>
                    <form class="ml-1" action="{{route('waypoint.destroy', $waypoint->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Ok to proceed with waypoint \'{{$waypoint->name}}\' deletion?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
