<div class="col-sm-12 full-display full-height" id="methods">
    {{-- METHODS --}}
    <h2 class="margin-top-3">(INHERITED) METHODS</h2>
    @if(!empty($methods))
        @foreach($methods as $m)
            <p> {{ $m }} </p>
        @endforeach
    @endif
</div>