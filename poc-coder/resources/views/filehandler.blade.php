@extends('layouts.app')

@section('content')

    <div class="col-md-12">

        <div class="col-md-6 col-md-offset-3">
            <p>
                @foreach($data as $d)
                    {{ $d }}
                @endforeach
            </p>
        </div>

    </div>

@endsection