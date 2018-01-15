{{-- DETAILS FROM FILE CONTENTS --}}
<div class="col-sm-8 col-sm-offset-2 margin-top-3 margin-bottom-3 full-height" id="splitted-statistics">
    <h2 class="margin-top-3">SPLITTED STATISTICS</h2>
    <ul class="list-group margin-top-3">
        <li class="list-group-item pink">Totaal amount of words: {{ $total }}</li>
        @foreach($eachWord as $item)
            <li class="col-sm-4 list-group-item {{ $item->count > 4 ? 'green' : 'blue'  }}">{{ $item->word }} = <span>{{ $item->count }} time{{ $item->count > 1 ? 's' : ''  }}</span></li>
        @endforeach
    </ul>
</div>