@extends('layouts.app')

@section('content')

<!-- new track form -->
<div class="container">
    <div class="card">
        <h5 class="card-header bg-dark text-light">@lang('track.new')</h5>
        <div class="card-body">
            <form method="POST" action="{{route('track.store')}}" \>
                @csrf
                <div class="form-group">
                    <label for="name">@lang('track.name')</label>
                    <input type="text" required class="form-control" id="name" name="name" value="{{old('name')}}"
                        autofocus aria-describedby="nameHelp">
                    <small id="nameHelp" class="form-text text-muted">@lang('track.name.descr')</small>
                </div>
                <button type="submit" class="btn btn-success">@lang('general.add')</button>
                <a href="{{route('track.index')}}" class="btn btn-secondary">@lang('general.cancel')</a>
            </form>
        </div>
    </div>
</div>

@endsection
