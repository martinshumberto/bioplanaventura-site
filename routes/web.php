<?php

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/
 

//Route::get('/eventos/{title}', array('as' => 'frontend-eventos', 'uses' => 'EventsController@show'));
Route::get('get-city-list','DropdownController@getCityList');

Route::namespace('Frontend')->group(function(){
    Route::get('/evento/{title}', array('as' => 'frontend-home', 'uses' => 'EventsController@evento'));
    Route::get('/', array('as' => 'frontend-home', 'uses' => 'HomeController@index'));
    Route::get('/equipe', array('as' => 'frontend-equipe', 'uses' => 'EquipeController@index'));    
    Route::get('/sobre-nos', array('as' => 'frontend-abouts', 'uses' => 'AboutsController@index'));
    Route::get('/blog', array('as' => 'frontend-blogs', 'uses' => 'BlogsController@index'));
    Route::get('/blog/{title}', array('as' => 'frontend-blog', 'uses' => 'BlogsController@show'));
    Route::get('/eventos', array('as' => 'frontend-events', 'uses' => 'EventsController@index'));
    Route::get('/eventos/{title}', array('as' => 'frontend-events', 'uses' => 'EventsController@show'));
    Route::get('/galeria', array('as' => 'frontend-galleries', 'uses' => 'GalleriesController@index'));
    Route::get('/assine-informativo', array('as' => 'frontend-newsletter', 'uses' => 'HomeController@assine'));
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

        /* CATEGORIAS EVENTOS */
        Route::get('/eventoscategorias', 'EventosCategoriasController@index')->name('backend-eventoscategorias');
        Route::get('/eventoscategorias/novo', 'EventosCategoriasController@create')->name('backend-eventoscategorias-create');
        Route::post('/eventoscategorias/novo', 'EventosCategoriasController@store')->name('backend-eventoscategorias-create');
        Route::get('/eventoscategorias/excluir/{id}', 'EventosCategoriasController@destroy')->name('backend-eventoscategorias-destroy');
        Route::put('/eventoscategorias/{id}', 'EventosCategoriasController@update')->name('backend-eventoscategorias-update');
        Route::get('/eventoscategorias/{id}', 'EventosCategoriasController@show')->name('backend-eventoscategorias-show');
        
        /* EVENTOS */
        Route::get('/eventos', 'EventosController@index')->name('backend-eventos');
        Route::get('/eventos/novo', 'EventosController@create')->name('backend-eventos-create');
        Route::post('/eventos/novo', 'EventosController@store')->name('backend-eventos-create');
        Route::get('/eventos/excluir/{id}', 'EventosController@destroy')->name('backend-eventos-destroy');
        Route::put('/eventos/{id}', 'EventosController@update')->name('backend-eventos-update');
        Route::get('/eventos/{id}', 'EventosController@show')->name('backend-eventos-show');

        /* GALERIA */
        Route::get('/galeria', 'GaleriaController@index')->name('backend-galeria');
        Route::get('/galeria/novo', 'GaleriaController@create')->name('backend-galeria-create');
        Route::post('/galeria/novo', 'GaleriaController@store')->name('backend-galeria-create');
        Route::get('/galeria/excluir/{id}', 'GaleriaController@destroy')->name('backend-galeria-destroy');
        Route::put('/galeria/{id}', 'GaleriaController@update')->name('backend-galeria-update');
        Route::get('/galeria/{id}', 'GaleriaController@show')->name('backend-galeria-show');
        

        /* ABOUTS */
        Route::get('sobre-nos', 'AboutsController@index')->name('backend-abouts');
        Route::post('sobre-nos/{id}', 'AboutsController@update')->name('backend-abouts-update'); 
        Route::post('upfiles', 'GalleriesController@upfiles')->name('backend-upfiles');

        /* ABOUTS */
        Route::get('configuracoes', 'ConfiguracoesController@index')->name('backend-configuracoes');
        Route::post('configuracoes/{id}', 'ConfiguracoesController@update')->name('backend-configuracoes-update'); 

    });

});
