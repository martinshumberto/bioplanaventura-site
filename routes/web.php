<?php

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::namespace('Frontend')->group(function(){
    Route::get('/', array('as' => 'frontend-home', 'uses' => 'HomeController@index'));
    Route::get('/sobre-nos', array('as' => 'frontend-abouts', 'uses' => 'AboutsController@index'));
    Route::get('/blog', array('as' => 'frontend-blogs', 'uses' => 'BlogsController@index'));
    Route::get('/blog/{title}', array('as' => 'frontend-blog', 'uses' => 'BlogsController@show'));
    Route::get('/eventos', array('as' => 'frontend-events', 'uses' => 'EventsController@index'));
    Route::get('/eventos/{title}', array('as' => 'frontend-event', 'uses' => 'EventsController@show'));
    Route::get('/galeria', array('as' => 'frontend-galleries', 'uses' => 'GalleriesController@index'));
});


Route::namespace('Backend')->prefix('cms')->group(function(){
    Route::get('/entrar', 'LoginController@index')->name('backend-auth');
    Route::post('/entrar', 'LoginController@authenticate')->name('backend-authenticate');
    Route::middleware('auth:admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('backend-home');

        /* SLIDER */
        Route::get('/slider', 'SliderController@index')->name('backend-slider');
        Route::get('/slider/novo', 'SliderController@create')->name('backend-slider-create');
        Route::post('/slider/novo', 'SliderController@store')->name('backend-slider-create');
        Route::get('/slider/{id}', 'SliderController@show')->name('backend-slider-show');
        Route::put('/slider/{id}', 'SliderController@update')->name('backend-slider-update');
        Route::get('/slider/excluir/{id}', 'SliderController@destroy')->name('backend-slider-destroy');

        /* ABOUTS */
        Route::get('sobre-nos', 'AboutsController@index')->name('backend-abouts');
        Route::post('sobre-nos/{id}', 'AboutsController@update')->name('backend-abouts-update');


    });

});
