@extends('layouts.app')

@section('content')

<!-- new track form -->
<div class="container">
    <div class="card">
        <h5 class="card-header bg-dark text-light">@lang('track.upload')</h5>
        <div class="card-body">
            <form method="POST" action="{{route('track.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="fileUpload">@lang('track.fileUpload')</label>
                    <div class="custom-file">
                        <input type="file" required class="form-control-file" id="fileUpload" name="fileUpload"
                            aria-describedby="fileUploadHelp">
                        <small id="fileUploadHelp"
                            class="form-text text-muted">@lang('track.fileUpload.descr')</small>
                    </div>
                </div> <button type="submit" class="btn btn-success">@lang('general.add')</button>
                <a href="{{route('track.index')}}" class="btn btn-secondary">@lang('general.cancel')</a>
            </form>
        </div>
    </div>
</div>

@endsection
