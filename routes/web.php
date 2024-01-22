<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $dati = config("data"); // definiamo una variabile e la associamo al file data nella cartella config
    $comics = $dati['comics']; // variabile dei film asscoiata alla variabile dati e assegnandoli al primo array
    $iconsBar = $dati['iconsBar']; // ugaule al primo array
    return view('home', ['comics' => $comics, 'iconsBar' => $iconsBar]); // associamo 'comics alla variabile comics e lo replichiamo per altro array'
})->name("home");

