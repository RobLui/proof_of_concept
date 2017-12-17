{!!  Form::open(['route' => 'filehandler','method' => 'post', 'files' => true]) !!}

    <div class="text-center margin-top-3">

        <label class="btn btn-default" for="file-selector">
            <input name="upload-file" id="file-selector" type="file" style="display:none;" onchange="$('#uploadtext').html((this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
            <span id="uploadtext">upload a file</span>
        </label>

    </div>

    <div class="text-center margin-top-3">
        {{ Form::submit('Start Checker', array('class' => 'btn btn-success')) }}
    </div>

{!! Form::close() !!}