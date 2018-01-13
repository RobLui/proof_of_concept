<div class="col-sm-12 full-display full-height margin-top-2" id="methods">
    {{-- METHODS --}}
    <h2 class="margin-top-3 margin-bottom-2">(INHERITED) METHODS</h2>
    @if(!empty($methods))
        @foreach($methods as $m)
            <div class="col-sm-4">
                <p> {{ $m }} </p>
            </div>
        @endforeach
    @endif
</div>