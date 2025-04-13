<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/', [TravelController::class, 'home'])->name('homepage');
Route::get('/costrusci-viaggio',[TravelController::class, 'createtrip'])->name('trip.create');
Route::get('/tutti-viaggi/{continent}', [TravelController::class, 'showTravelsContinent'])->name('trips.continent');
Route::get('/dettaglio/{travel}', [TravelController::class, 'show'])->name('travel.show');
Route::get('/modifica/{travel}', [TravelController::class, 'edit'])->name('travel.edit');