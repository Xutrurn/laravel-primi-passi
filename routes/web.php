<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'titolo1' => 'Home Page',
        'titolo2' => 'Titolo 2',
        'titolo3' => 'Titolo 3',
        'caratteristiche' => [
            'Caratteristica 1',
            'Caratteristica 2',
            'Caratteristica 3',
        ]
    ];
    return view('welcome',$data);
});



Route::get('/contatti', function () {
    $data = [
        'titolo1' => 'Pagina Contatti',
        'contatti' =>[
            'Nome',
            'mail@mail.it',
            '1234567'
        ]
    ];
    return view('contacts',$data);
});

Route::get('/informazioni', function () {
    $data = [
        'titolo1' => 'Pagina Informazioni',
        'informazioni' => [
            'Informazione 1',
            'Informazione 2',
            'Informazione 3',
        ]
    ];
    return view('about',$data);
});
