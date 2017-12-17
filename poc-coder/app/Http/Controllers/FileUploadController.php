<?php

namespace App\Http\Controllers;

use function compact;
use function get_defined_functions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Malahierba\WordCounter\WordCounter;
use function view;

class FileUploadController extends Controller
{

    public function handle(Request $req) {

        if ($req->hasFile('upload-file'))
        {
            // Define the uploaded file
            $contents = Input::file('upload-file');

            // Get the content from the uploaded file
            $data = File::get($contents);

            // Init new wordCounter
            $wordcounter = new WordCounter();

            // Edited standard config protected to public to unset true's, enabling for code checking words
            $wordcounter->remove_html_tags = false;
            $wordcounter->remove_scripts = false;

            // Load string to analyze
            $wordcounter->load($data);

            // Count all words inside the file (analyzed string)
            $total = $wordcounter->countTotalWords();

            // Count each word
            // You receive an array with objects: -> word en -> count
            $eachWord = $wordcounter->countEachWord();

            // Get the defined functions from the uploaded file
            $functions = $this->defined_function($contents);
//            dd($functions);

            // dd($data);
        }
        return view('filehandler',compact('data','total','eachWord','functions'));
    }

    public function defined_function($filename)
    {
        $this->filename = get_defined_functions();
        return $filename;
    }
}
