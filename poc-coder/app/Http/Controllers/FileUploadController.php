<?php

namespace App\Http\Controllers;

use function explode;
use function get_declared_classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Malahierba\WordCounter\WordCounter;
use function compact;
use function get_class_methods;
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
            $methods = $this->get_methods($data);

            // Get the defined class names from within the uploaded file
            $classnames = $this->get_class_names($data);

            $names = explode("\n", $classnames);

        }
        return view('filehandler',compact('data','total','eachWord','methods','classnames','names'));
    }

    public function get_class_names($filename) {
        $classes = $filename.implode(get_declared_classes())[0];
        return $classes;
    }

    public function get_methods($filename)
    {
        $methods = get_class_methods($filename);
        return $methods;
    }
}
