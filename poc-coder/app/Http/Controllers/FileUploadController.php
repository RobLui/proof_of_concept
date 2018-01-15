<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Malahierba\WordCounter\WordCounter;
use function compact;
use function explode;
use function get_class_methods;
use function get_declared_classes;
use function view;

class FileUploadController extends Controller
{
    public function handle(Request $req)
    {
        $max_suggested = 5000;

        if($req->isMethod('POST'))
        {
            $php_suggestions = array();
            $js_suggestions = array();

            $rules = [
                'upload-file' => 'required'
            ];
            $validator = Validator::make($req->all(),$rules);

            if ($validator) {

                if ($req->hasFile('upload-file')) {
                    // Get the uploaded file out of the request
                    $uploadedfile = $req->file('upload-file');

                    // Get the file size
                    $filesize = $uploadedfile->getSize();

                    // Get the file extension (php,js,..)
                    $extension = $uploadedfile->getClientOriginalExtension();

                    // dd($extension);

                    if ($filesize < $max_suggested && ($extension == 'js' || $extension == 'php')) {

                        // Define the uploaded file
                        $contents = $req->file('upload-file');

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

                        // Count each word, you receive an array with objects: -> word en -> count
                        $eachWord = $wordcounter->countEachWord();

                        // Get the defined functions from the uploaded file
                        $methods = $this->get_methods($uploadedfile);

                        // Get the defined class names from within the uploaded file
                        $classnamesraw = $this->get_class_names($data);

                        // Split contents in array based on a delimiter (\n)
                        $classnames = explode("\n ", $classnamesraw);

                        // Count 'this' usage
                        $this_usage = explode("%this%", $classnamesraw);

                        $classes = explode("‰class‰", $classnamesraw);
                        // dd($classes);

                        // Split on classes (check for multiple classes in 1 php file)
                        if(count($classes) > 1 && $extension == 'php')
                        {
                            $php_suggestions['php'] = 'Try providing 1 class per php file.';
                        }

                        if(count($this_usage) <= 1 && $extension == 'js')
                        {
                            $js_suggestions['js'] = "Try using 'this.' more often than you do now!" ;
                        }

                        // Split contents in array based on a delimiter (functions)
                        $functions = explode("function", $classnamesraw);
                    }
                    else {
                        Session::flash('error', ('Please use a different kind of file! JS or PHP should work!'));
                        return Redirect::back();
                    }
                }
            }
            return view('filehandler', compact(
                'data', 'total', 'eachWord', 'methods',
                'classnamesraw', 'classnames', 'max_suggested','functions','php_suggestions','js_suggestions'
            ));
        }
    }

    public function get_class_names($filename = null)
    {

        // Return the text in a compact format
        $classes = $filename . implode(get_declared_classes())[0];

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
