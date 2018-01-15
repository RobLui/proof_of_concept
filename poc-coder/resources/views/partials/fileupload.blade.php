@include('common.errors')
@include('common.messages')

<div id="hide-checker" class="text-center margin-top-3">

    {!!  Form::open(['route' => 'filehandler', 'files' => true]) !!}

        {{ csrf_field() }}

        <div class="col-sm-12 form-group remove-on-check">
            <h2>INSTRUCTIONS</h2>
            {{-- Ja Sam, die < en > zijn ervoor gdn :D --}}
            <div class="text-center">
                <span class="color-black">
                    Upload a JavaScript/PHP file to start.
                </span>
                <span class="color-red"> < </span>
                <span class="color-black">
                    Beware, any other file will not result in a valid orientizer!
                </span>
                <span class="color-red"> > </span>
                </span>
            </div>
        </div>

        {{--#1--}}
        <div class="col-sm-12 margin-top-2 margin-bottom-2 remove-on-check">
            <h2>STEP 1</h2>
            <label class="btn btn-default col-md-6 col-md-offset-3" for="file-selector">
                <input name="upload-file" id="file-selector" type="file" style="display:none;" onchange="$('#uploadtext').html((this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
                <span id="uploadtext">upload the file</span>
            </label>
        </div>

        {{--#2--}}
        <div class="col-sm-12 remove-on-check">
            <h2>STEP 2</h2>
            <div class="text-center">
                {{ Form::submit('Start Checker', array('class' => 'col-md-6 col-md-offset-3 btn btn-success', 'id' => 'checker')) }}
            </div>
        </div>

    {!! Form::close() !!}
</div>



<div id="load_animation" class="ld ld-hourglass ld-spin-fast changer hidden">


</div>



<div class="t">

</div>