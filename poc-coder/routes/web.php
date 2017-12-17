<?php

// STANDARD
    Route::get('/', function () {
        return view('welcome');
    })
    ->name('welcome')
    ;

// GITHUB
    Route::get('/github', function () {return redirect('https://github.com/RobLui/proof_of_concept');})
    ->name("github")
    ;

// DOCUMENTATION
    Route::get('/documentation', function () {return redirect('https://github.com/RobLui/proof_of_concept/blob/master/info.md');})
    ->name("gitdocumentation")
    ;

// FILE CONTENT HANDLING
    Route::get('/filehandler', 'FileUploadController@handle')
    ->name('filehandler')
    ;

    Route::post('/filehandler', 'FileUploadController@handle')
    ->name('filehandler')
    ;



