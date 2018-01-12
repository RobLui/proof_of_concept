@extends('layouts.app')

@section('content')

    @include('partials.navigation')

    @if(!empty($data))
        <div class="col-sm-12">
        <div class="col-sm-8 full-display full-height col-sm-offset-2">
            @include('handler.classnames')
        </div>

        <div class="col-sm-8 full-display full-height col-sm-offset-2">
            @include('handler.splitted_classnames')
        </div>

        <div class="col-sm-12 full-display"></div>
        <div class="col-sm-12 full-display"></div>
        <div class="col-sm-12 full-display"></div>

        <div class="col-sm-8 full-display full-height col-sm-offset-2">
            @include('handler.methods')
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            @include('handler.raw_content')
        </div>

        <div class="col-sm-12">
            @include('handler.splitted_statistics')
        </div>

        <div class="col-sm-12">
            @include('handler.suggestions')
        </div>
        @else
            <div class="margin-top-3">
                <h2 class="margin-top-6 margin-bottom-3">Input a file on the main page :)</h2>
                <a href="{{ route('welcome') }}" class="btn btn-info">&larr; back to main page</a>
            </div>
        </div>
    @endif


@endsection