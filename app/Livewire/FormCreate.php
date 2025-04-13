<?php

namespace App\Livewire;

use App\Models\Travel;
use App\Models\Service;
use Livewire\Component;
use App\Models\Continent;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class FormCreate extends Component
{
    use WithFileUploads;
    
    public $services;
    public $continents;
    public $title, $description, $image, $continent_id;

    public function mount(){
        $continents = Continent::all();
        $services = Service::all();
        $this->continents = $continents;
        $this->services = $services;
    }

    public function store(){
        $travel = Auth::user()->travels()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'image'=>$this->image->store(path: 'public/images'),
            'continent_id'=>$this->continent_id
        ]);

        session()->flash('createTravel', 'viaggio creato');
        return redirect(route('homepage'));
    }

    public function render()
    {
        return view('livewire.form-create');
    }
}
