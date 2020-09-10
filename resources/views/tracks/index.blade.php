@extends('layouts.app')

@section('content')

<!-- tracks buttons bar -->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="{{route('track.create')}}" class="btn btn-success">@lang('track.new')</a>
        </div>
        <div class="col-sm text-right">
            <button type="button" class="btn btn-primary" disabled>@lang('general.switch_map')</button>
            <button type="button" class="btn btn-primary" disabled>@lang('general.filters')</button>
        </div>
    </div>
</div>

<!-- tracks list table -->
<div class="container mt-1">
    <table class="table table-hover">
        <thead class="bg-dark text-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('track.name')</th>
                <th scope="col" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tracks as $track)
            <tr>
                <th scope="row">{{$loop->index + 1}}</th>
                <td>{{$track->name}}</td>
                <td class="form-inline">
                    <a href="{{route('track.show', $track->id)}}"
                        class="btn btn-sm btn-primary ml-auto">@lang('general.details')</a>
                    <a href="{{route('track.edit', $track->id)}}"
                        class="btn btn-sm btn-primary ml-1">@lang('general.edit')</a>
                    <form class="ml-1" action="{{route('track.destroy', $track->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Ok to proceed with track \'{{$track->name}}\' deletion?')">@lang('general.delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
