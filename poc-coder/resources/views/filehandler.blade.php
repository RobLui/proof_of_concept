@extends('layouts.app')

@section('content')

    @include('partials.navigation')

    <div class="col-md-12 full-display">

        @if(!empty($data))

            <div class="col-md-6 full-display full-height col-md-offset-3">

                <div class="col-md-12 full-display full-height" id="classnames">
                    {{-- CLASSNAMES --}}
                    <h2 class="margin-top-3">CLASSNAMES</h2>
                    @if(!empty($classnames))
                      <p>{{ $classnames }}</p>
                    @endif
                </div>

                <div class="col-md-12 full-display ">
                </div>
                <div class="col-md-12 full-display full-height">
                </div>
                <div class="col-md-12 full-display ">
                </div>


                <div class="col-md-12 full-display full-height" id="names">
                    {{-- NAMES --}}
                    <h2 class="margin-top-3">NAMES</h2>
                    @if(!empty($names))
                        @foreach($names as $n)
                            <p>{{ $n }} <br></p>
                        @endforeach
                    @endif
                </div>

                {{-- OTHER --}}
                <div class="col-md-12 full-display ">
                </div>


                <div class="col-md-12 full-display full-height" id="methods">
                    {{-- METHODS --}}
                    <h2 class="margin-top-3">METHODS</h2>
                    @if(!empty($methods))
                        @foreach($methods as $m)
                            <p> {{ $m }} </p>
                        @endforeach
                    @endif
                </div>

            </div>
    </div>

    <div class="col-md-12">
            {{-- FILE CONTENTS --}}
            <div class="col-md-6 full-display col-md-offset-3 full-height" id="raw-content">
                <h2 class="margin-top-3">RAW CONTENT</h2>
                <p class="margin-top-3 text-left block"> {{ $data }} </p>
            </div>

            {{-- OTHER --}}
            <div class="col-md-6 full-display full-height col-md-offset-3">
            </div>

            {{-- DETAILS FROM FILE CONTENTS --}}
            <div class="col-md-6 col-md-offset-3 margin-top-3 margin-bottom-3 full-height" id="statistics">
                <h2 class="margin-top-3">STATISTICS</h2>
                <ul class="list-group margin-top-3">
                    <li class="list-group-item pink">Totaal aantal woorden: {{ $total }}</li>
                    @foreach($eachWord as $item)
                        <li class="col-md-4 list-group-item {{ $item->count > 2 ? 'green' : 'blue'  }}">{{ $item->word }} = <span>{{ $item->count }} keer</span></li>
                    @endforeach
                </ul>
            </div>

            @else
            <div class="margin-top-3">
                <h2 class="margin-top-6 margin-bottom-3">Input a file on the main page :)</h2>
                <a href="{{ route('welcome') }}" class="btn btn-info">&larr; back to main page</a>
            </div>
        @endif
        </div>
</div>

@endsection