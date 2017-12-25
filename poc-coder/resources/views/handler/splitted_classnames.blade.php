<div class="col-sm-12 full-display full-height" id="splitted-classnames">
    {{-- NAMES --}}
    <h2 class="margin-top-3">SPLITTED CLASSNAMES</h2>
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