@extends('layouts.app')

@section('content')

    <div class="col-md-12 full-display">

        @if(!empty($data))
            {{-- FILE CONTENTS --}}
            <div class="col-md-6 full-display col-md-offset-3">
                <h2>Inserted file raw content:</h2>
                <p class="margin-top-3"> {{ $data }} </p>
            </div>

            {{-- DETAILS FROM FILE CONTENTS --}}
            <div class="col-md-6 col-md-offset-3">
                <h2>Statistics</h2>
                <ul class="list-group margin-top-3">
                    <li class="col-md-12 list-group-item">Totaal aantal woorden: {{ $total }}</li>
                    @foreach($eachWord as $item)
                        <li class="col-md-3 list-group-item">{{ $item->word }} = {{ $item->count }} keer</li>
                    @endforeach
                </ul>
            </div>
            @else
            <h2>Input a file on the main page :)</h2>
            <a href="{{ route('welcome') }}" class="btn btn-info">&larr; back to main page</a>
        @endif

    </div>

@endsection