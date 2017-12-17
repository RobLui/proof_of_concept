@extends('layouts.app')

@section('content')

    <div class="col-md-12 margin-top-3">

        {{-- FILE CONTENTS --}}
        <div class="col-md-6 col-md-offset-3">
            <h2>Inserted datafile contents:</h2>
            <p> {{ $data }} </p>
        </div>

        {{-- DETAILS FROM FILE CONTENTS --}}
        <div class="col-md-6 col-md-offset-3">
            <h2>Statistics</h2>
            <ul class="list-group">
                <li class="col-md-12 list-group-item">Totaal aantal woorden: {{ $total }}</li>
                @foreach($eachWord as $item)
                    <li class="col-md-3 list-group-item">{{ $item->word }} = {{ $item->count }} keer</li>
                @endforeach
            </ul>
        </div>

        </div>

@endsection