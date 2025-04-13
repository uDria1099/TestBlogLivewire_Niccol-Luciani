<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Continent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TravelController extends Controller implements HasMiddleware
{

    public static function middleware(){
        return [
            new Middleware('auth', except:['home'])
        ];
    }

    public function home(){
        $continents = Continent::all();
        return view('welcome', compact('continents'));
    }

    public function createtrip(){
        return view('travel.createtrip');
    }

    public function showTravelsContinent(Continent $continent){
        $travels = $continent->travels()->get();
        return view('travel.showTravelsContinent', compact('travels','continent'));
    }

    public function edit(Travel $travel){
        return view('travel.edit', compact('travel'));
    }

    public function show(Travel $travel){
        return view('travel.show', compact('travel'));
    }
}
