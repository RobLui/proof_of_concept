<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

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



