<div class="col-sm-12 full-display full-height margin-top-3" id="functions">
    {{-- CLASSNAMES --}}
    <h2 class="margin-top-3 margin-bottom-2">FUNCTIONS</h2>
    {{--@if(!empty($classnamesraw))--}}
        {{--<p>{{ $classnamesraw }}</p>--}}
    {{--@endif--}}
    @if(!empty($functions))
        <ul class="form-group-lg">
           <li class="hidden"> {!! $i = 0 !!}</li>
        @foreach($functions as $f)
            @if($i > 0)
                <li class="list-group-item">{{ $f }}</li>
            @endif
            <li class="hidden">{!! $i++ !!}</li>
        @endforeach
        </ul>
    @endif
</div>