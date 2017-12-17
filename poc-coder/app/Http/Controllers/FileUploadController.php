<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function view;

class FileUploadController extends Controller
{

    public function handle() {
        return view('filehandler');
    }

}
