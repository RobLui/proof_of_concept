<div class="col-sm-12 margin-top-3 text-center" id="splitted-classnames">
    {{-- NAMES --}}
    <h2 class="margin-top-3 margin-bottom-2">SPLITTED CLASSNAMES CONTENTS</h2>
    @if(!empty($classnames))

        {{-- SET VARIABLE + HIDE IT --}}
        <div class="hide">{!! $number = 0 !!}</div>

        @foreach($classnames as $n)
            <div class="col-sm-10 col-sm-offset-1">
                {{--{{ dump($number) }}--}}
                <div class="col-sm-12 color-white padding-top-1 padding-bottom-1 {!! $number % 2 == 0 ? 'odd' : 'even'  !!}">

                    {{-- UP VARIABLE + HIDE IT --}}
                    <div class="hide">{!! $number++ !!}}</div>

                    <p>{{ $n }} <br></p>
                </div>
            </div>
        @endforeach
    @endif
</div>