@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead class="thead-dark">
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
