{{-- DETAILS FROM FILE CONTENTS --}}
<div class="col-sm-6 col-sm-offset-3 margin-top-3 margin-bottom-3 full-height" id="splitted-statistics">
    <h2 class="margin-top-3">SUGGESTIONS</h2>
    <ul class="list-group margin-top-3">
        {{--SUGGESTIE #1--}}
        @if($total > $max_suggested)
            <li class="list-group-item pink">Het totaal aantal woorden '{{ $total }}' ligt ver boven de aangerade hoeveelheid die je in een script wil staan hebben</li>
        @endif
        {{--SUGGESTIE #2--}}

    </ul>
</div>