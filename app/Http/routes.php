<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', ['as' => 'home', 'uses' => function () {
        return view('home');
    }]);

    // RESTful routes
    Route::get('/note', ['as' => 'note.index', 'uses' => 'NoteController@index']);
    Route::get('/note/create', ['as' => 'note.create', 'uses' => 'NoteController@create']);
    Route::post('/note', ['as' => 'note.store', 'uses' => 'NoteController@store']);
    Route::get('/note/{id}', ['as' => 'note.show', 'uses' => 'NoteController@show']);
    Route::get('/note/{id}/edit', ['as' => 'note.edit', 'uses' => 'NoteController@edit']);
    Route::put('/note/{id}', ['as' => 'note.update', 'uses' => 'NoteController@update']);
    Route::delete('/note/{id}', ['as' => 'note.destroy', 'uses' => 'NoteController@destroy']);

    // Route Group Example
    // Route::group(['prefix' => 'note', 'as' => 'note.'], function() {
    //     Route::get('/', ['as' => 'index', 'uses' => 'NoteController@index']);
    //     Route::get('/create', ['as' => 'create', 'uses' => 'NoteController@create']);
    //     Route::post('/', ['as' => 'store', 'uses' => 'NoteController@store']);
    //     Route::get('/{id}', ['as' => 'show', 'uses' => 'NoteController@show']);
    //     Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'NoteController@edit']);
    //     Route::put('/{id}', ['as' => 'update', 'uses' => 'NoteController@update']);
    //     Route::delete('/{id}', ['as' => 'update', 'uses' => 'NoteController@update']);
    // });

    // Resource Controller
    // Route::resource('note', 'NoteController');

});
