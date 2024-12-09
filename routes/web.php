<?php
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

$portfolio = [ 
    ["tittle" => "Portfolio", "link" => "/portfolio"],
    ["tittle" => "About", "link" => "/about"],
    ["tittle" => "Contact", "link" => "/contact"],
];

// el metodo get sirve para cargar funciones y componenentes funcionales del sistema (controlador)
// Route::get('/', function () {
//     echo "<a href='/contacto'>contacto</a>";
// });

// Route::get('/contacto', function () {
//     return view('index');
// })->name('contacto');

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', MessageController::class)->name('contact.submit');
// Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::get('/portfolio',[PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{id}',[PortfolioController::class, 'show'])->name('portfolio.show');