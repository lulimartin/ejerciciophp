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

Route::get('/miPrimeraRuta', function(){

  return "cree mi primera ruta en laravel";


} );

Route::get('/esPar/{numero}', function($numero){
  if ($numero%2 == 0) {
      return "es par";
  } else {
      return "es impar";
  }
} );

Route::get('/sumar/{numero}/{numero2}', function($numero,$numero2){
      return $numero + $numero2;
  });

  Route::get('/sumarTresNumeros/{numero}/{numero2}/{numero3?}', function($numero,$numero2,$numero3){
        return $numero + $numero2 + $numero3 ;
    });

    Route::get('/peliculas/{id}', function ($id){
        $peliculas = [
          ['titulo' =>'Matrix', 'rating' =>'2' ],
          ['titulo' =>'Volver al Futuro', 'rating' =>'8' ],
          ['titulo' =>'Star Wars', 'rating' =>'9'  ],
          ['titulo' =>'Toy story', 'rating' =>'8.5'  ],
          ['titulo' =>'La Odisea de los Giles', 'rating' =>'7'  ],
        ];
        //en la vista peliculas, hay una variable que toma los valores de $peliculas
        return view('peliculas',[
          'movies' => $peliculas,
        ]);
        
        return view('detallePelicula',[
          'pelicula' =>$peliculas[$id]
        ]);

    });
