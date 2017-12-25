@extends('layouts.app')

@section('content')

    @include('partials.navigation')


        @if(!empty($data))

            <div class="col-sm-6 full-display full-height col-sm-offset-3">

                <div class="col-sm-12 full-display full-height" id="raw-classnames">
                    {{-- CLASSNAMES --}}
                    <h2 class="margin-top-3 margin-bottom-2">RAW CLASSNAMES</h2>
                    @if(!empty($classnamesraw))
                      <p>{{ $classnamesraw }}</p>
                    @endif
                </div>

                <div class="col-sm-12 full-display ">
                </div>
                <div class="col-sm-12 full-display full-height">
                </div>
                <div class="col-sm-12 full-display ">
                </div>

                <div class="col-sm-12 full-display full-height" id="splitted-classnames">
                    {{-- NAMES --}}
                    <h2 class="margin-top-3">SPLITTED CLASSNAMES </h2>
                    @if(!empty($classnames))

                        {{-- SET VARIABLE + HIDE IT --}}
                        <div class="hide">{!! $number = 0 !!}</div>

                        @foreach($classnames as $n)
                            {{--{{ dump($number) }}--}}
                            <div class="col-sm-12 color-white padding-top-1 padding-bottom-1 {!! $number % 2 == 0 ? 'odd' : 'even'  !!}">

                                {{-- UP VARIABLE + HIDE IT --}}
                                <div class="hide">{!! $number++ !!}}</div>

                                <p>{{ $n }} <br></p>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="col-sm-12 full-display ">
                </div>
                <div class="col-sm-12 full-display ">
                </div>
                <div class="col-sm-12 full-display ">
                </div>


                <div class="col-sm-12 full-display full-height" id="methods">
                    {{-- METHODS --}}
                    <h2 class="margin-top-3">(INHERITED) METHODS</h2>
                    @if(!empty($methods))
                        @foreach($methods as $m)
                            <p> {{ $m }} </p>
                        @endforeach
                    @endif
                </div>
        </div>

        <div class="col-sm-12">
                {{-- FILE CONTENTS --}}
                <div class="col-sm-6 full-display col-sm-offset-3 full-height" id="raw-content">
                    <h2 class="margin-top-3">RAW CONTENT</h2>
                    <p class="margin-top-3 text-left block"> {{ $data }} </p>
                </div>

                <div class="col-sm-6 full-display full-height col-sm-offset-3">
                </div>

                {{-- DETAILS FROM FILE CONTENTS --}}
                <div class="col-sm-6 col-sm-offset-3 margin-top-3 margin-bottom-3 full-height" id="splitted-statistics">
                    <h2 class="margin-top-3">SPLITTED STATISTICS</h2>
                    <ul class="list-group margin-top-3">
                        <li class="list-group-item pink">Totaal aantal woorden: {{ $total }}</li>
                        @foreach($eachWord as $item)
                            <li class="col-sm-4 list-group-item {{ $item->count > 2 ? 'green' : 'blue'  }}">{{ $item->word }} = <span>{{ $item->count }} keer</span></li>
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


@endsection