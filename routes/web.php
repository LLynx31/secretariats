<?php

use App\Http\Controllers\ConsommableController;
use App\Http\Controllers\CourrierController;
use App\Http\Controllers\ProfileController;
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
    return view('connexion');
})->middleware("guest");

Route::get('/dashboard', function () {
    return view('Accueil');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // start gestion courriers
    Route::get('/courriers', [CourrierController::class, 'getCourriers'])->name('mesCourriers');

    Route::post('/courriers', [CourrierController::class, 'postCourriers'])->name('envoyerCourriers');

    Route::get('/courriers/envoye', [CourrierController::class, 'getCourriersSend'])->name('mesCourriersEnvoyés');

    // end gestion courriers

    // stard gestion consommable

    Route::get('/consommables', [ConsommableController::class, 'getConsommables'])->name('mesConsommable');

    Route::post('/consommables', [ConsommableController::class, 'getConsommables'])->name('mesConsommable');

    // end gestion consommable
    Route::get('/personnels', [ConsommableController::class, 'getPersonnels'])->name('monPersonnel');


    //stard gestion Personnel


    Route::patch('/consommables', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
