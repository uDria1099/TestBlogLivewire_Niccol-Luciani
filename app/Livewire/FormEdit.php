<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\Continent;
use Livewire\WithFileUploads;

class FormEdit extends Component
{   
    use WithFileUploads;
    
    public $services;
    public $servizi  = [];
    public $continents;
    public $title, $description, $newImage, $continent_id;
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
        
        $this->travel->services()->sync($this->servizi);
        
        session()->flash('updateTravel', 'Hai modificato il Viaggio');
        
        return redirect(route('homepage'));
    }
    
    public function delete()
    {
        
        if ($this->travel){
            
            $this->travel->services()->detach();
            $this->travel->delete();
            
            session()->flash('deleteTravel', 'viaggio cancellato');
            return redirect(route('homepage'));
        }
        
        session()->flash('deleteError', 'impossibile cancellare');
    }
    
    public function render()
    {
        return view('livewire.form-edit');
    }
}
