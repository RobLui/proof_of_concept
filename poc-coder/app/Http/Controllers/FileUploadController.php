<?php

namespace App\Http\Controllers;

use function back;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Malahierba\WordCounter\WordCounter;
use function compact;
use function explode;
use function get_class_methods;
use function get_declared_classes;
use function view;

class FileUploadController extends Controller
{
    public function handle(Request $req) {

        if ($req->hasFile('upload-file'))
        {
            // Get the uploaded file out of the request
            $uploadedfile = $req->file('upload-file');

            // Get the file size
            $filesize = $uploadedfile->getSize();

            // Get the file extension (php,js,..)
            $extension = $uploadedfile->getClientOriginalExtension();
//            dd($extension);

            if ($filesize < 10000 && $extension == "js") {

                // Define the uploaded file
                $contents = Input::file('upload-file');

                // Get the content from the uploaded file
                $data = File::get($contents);

                // Init new wordCounter
                $wordcounter = new WordCounter();

                // Edited standard config protected to public to unset true's, enabling for code checking words
                $wordcounter->remove_html_tags = false; $wordcounter->remove_scripts = false;

                // Load string to analyze
                $wordcounter->load($data);

                // Count all words inside the file (analyzed string)
                $total = $wordcounter->countTotalWords();

                // Count each word, you receive an array with objects: -> word en -> count
                $eachWord = $wordcounter->countEachWord();

                // Get the defined functions from the uploaded file
                $methods = $this->get_methods($uploadedfile);

                // Get the defined class names from within the uploaded file
                $classnamesraw = $this->get_class_names($data);

                // Split contents in array based on a delimiter (\n)
                 $classnames = explode("\n ", $classnamesraw);

                // Split contents in array based on a delimiter (public function)
                // $classnames = explode("public function ", $classnamesraw);
            }

            else {
                return back();
            }
        }
        return view('filehandler',compact('data','total','eachWord','methods','classnamesraw','classnames'));
    }

    public function get_class_names($filename = null) {

        // Return the text in a compact format
        $classes = $filename.implode(get_declared_classes())[0];

        // dd($classes);
        return $classes;
    }

    public function get_methods($filename = null)
    {
        // Get class names in the current scope
        $methods = get_class_methods($filename);

        // dd($methods);
        return $methods;
    }

}
