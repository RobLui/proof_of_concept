<?php

namespace App\Http\Controllers;

use function compact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use function view;

class FileUploadController extends Controller
{

    public function handle(Request $req) {

        if ($req->hasFile('upload-file'))
        {
            $contents = Input::file('upload-file');
            $data = File::get($contents);
            dd($data);
        }

        return view('filehandler',compact('data'));
    }

}
