<?php

use App\Http\Controllers\EventsController;
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

// Here is where you can register web routes for you application. These
// routes are loaded by the RoueServiceProvider within a group which
// contains the "web" middleware group. Now create something great!


Route::get('/', function () {
    return view('welcome');
});

/**
 *  eventName = denominaci
 * eventCodi = codi
 */
Route::get('events/{eventName}/{eventCodi}', [EventsController::class, 'getEventNameWithCodi']);

Route::get('events/{nameEvent}', [EventsController::class, 'getEventName']);

/**
 * Llistat de tots els events que es facin
 * a la província ordenats per data d’inici.
 * No es mostren els esdeveniments finalitzats.
 */
Route::get('events/provincia/{provinceName}', [EventsController::class, 'getEventsFromProvince']);

Route::get('events/provincia/{provinceName}/{category}', [EventsController::class, '']);

Route::get('/events/{event}', [EventsController::class, 'show']);

