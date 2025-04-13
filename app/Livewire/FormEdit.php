<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\Continent;
use Livewire\WithFileUploads;

class FormEdit extends Component
{   
    use WithFileUploads;

    public $services = [];
    public $continents;
    public $title, $description, $image, $continent_id;
    public $travel;

    public function mount(){
        $continents = Continent::all();
        $services = Service::all();
        $this->continents = $continents;
        $this->services = $services;
        $this->title = $this->travel->title;
        $this->description = $this->travel->description;
        $this->newImage = $this->travel->image;
    }

    public function update(){
 
      $this->travel->update([
            'title'=>$this->title,
            'description'=>$this->description,
            'image'=>$this->newImage->store('images', 'public'),
            'continent_id'=>$this->continent_id
        ]);
        
        $this->travel->services()->sync($this->services);

        session()->flash('updateTravel', 'Hai modificato il Viaggio');

        return redirect(route('homepage'));
    }

    public function render()
    {
        return view('livewire.form-edit');
    }
}
