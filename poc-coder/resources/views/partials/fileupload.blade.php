
<div class="text-center margin-top-3">

    {!!  Form::open(['route' => 'filehandler','method' => 'post', 'files' => true]) !!}
        <h2>STEP 1</h2>
        <label class="btn btn-default col-md-6 col-md-offset-3" for="file-selector">
            <input name="upload-file" id="file-selector" type="file" style="display:none;" onchange="$('#uploadtext').html((this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
            <span id="uploadtext">upload a file</span>
        </label>

        <div class="col-md-12">
            <div class="margin-bottom-1"></div>
        </div>

        <h2>STEP 2</h2>
        <div class="text-center">
            {{ Form::submit('Start Checker', array('class' => 'col-md-6 col-md-offset-3 btn btn-success')) }}
        </div>
    {!! Form::close() !!}

    <div class="text-center col-md-12">
        <h2>STEP 3</h2>
        <div class="col-md-6 col-md-offset-3 btn btn-danger disabled">Examine OOP Options</div>
    </div>

</div>
