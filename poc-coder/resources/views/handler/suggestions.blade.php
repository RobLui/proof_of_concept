<div class="col-sm-8 col-sm-offset-2 margin-top-3 margin-bottom-3 full-height" id="suggestions">
    <h2 class="margin-top-3">SUGGESTIONS</h2>
    <ul class="list-group margin-top-3">

    {{--OVERALL SUGGESTIONS --}}

        @if(empty($js_suggestions) && empty($php_suggestions))
                <h4>Nope! No suggestions for an awesome looking file :)! Well done, keep coding OOP style :)!</h4>
            @else
            {{--#1--}}
            @if($total > $max_suggested)
                <li class="list-group-item pink">
                    The total amount of words, which is: {{ $total }},
                    is far above the maximum suggested amount that you'd want in a script.
                    Consider splitting these up, or try using functions for multiple purposes.
                    {{--Het totaal aantal woorden, namelijk {{ $total }},--}}
                    {{--ligt ver boven de maximaal aangerade hoeveelheid die je in een script wil staan hebben.--}}
                    {{--Deze kan je best opsplitsen in meerdere scripts en daarna--}}
                </li>
            @endif
            {{--#2--}}


        {{--JS SPECIFIC SUGGESTIONS--}}
            @if(!empty($js_suggestions))
                <li class="list-group-item pink">
                        JS
                </li>
            @endif


        {{--PHP SPECIFIC SUGGESTIONS --}}
            @if(!empty($php_suggestions))
                <li class="list-group-item orange">
                    PHP
                </li>
            @endif

        @endif

    </ul>
</div>