
<div id="hide-checker" class="text-center margin-top-3">

    {!!  Form::open(['route' => 'filehandler','method' => 'post', 'files' => true]) !!}

        <div class="col-sm-12 form-group">
            <h2>INSTRUCTIONS</h2>
            <div class="form-control text-center">
                <span>
                    Upload a JavaScript file to start the checking,
                </span>
                <span>
                    beware any other file will not result in a valid orientizer!
                </span>
            </div>
        </div>

        <div class="col-sm-12 margin-top-2 margin-bottom-2">
            <h2>STEP 1</h2>
            <label class="btn btn-default col-md-6 col-md-offset-3" for="file-selector">
                <input name="upload-file" id="file-selector" type="file" style="display:none;" onchange="$('#uploadtext').html((this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
                <span id="uploadtext">upload the file</span>
            </label>
        </div>

        <div class="col-sm-12">
            <h2>STEP 2</h2>
            <div class="text-center">
                {{ Form::submit('Start Checker', array('class' => 'col-md-6 col-md-offset-3 btn btn-success', 'id' => 'checker')) }}
            </div>
        </div>

    {!! Form::close() !!}

</div>
