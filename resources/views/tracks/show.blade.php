@extends('layouts.app')

@section('content')

<!-- new track form -->
<div class="container">
    <div class="card my-1">
        <h5 class="card-header bg-dark text-light">@lang('track.details')</h5>
        <div class="card-body">
            <div class="container">
                <div class="row border-bottom mb-2">
                    <div class="col-sm">
                        <span class="font-weight-bold">{{$track->name}}</span>
                        <small class="form-text text-muted">@lang('track.name')</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container form-inline">
    <a href="{{route('track.index')}}" class="btn btn-primary ml-1">@lang('general.back')</a>
    <a href="{{route('track.edit', $track->id)}}" class="btn btn-primary ml-1">@lang('general.edit')</a>
    <form class="ml-1" action="{{route('track.destroy', $track->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger"
            onclick="return confirm('Ok to proceed with track \'{{$track->name}}\' deletion?')">@lang('general.delete')</button>
    </form>
</div>

@endsection
