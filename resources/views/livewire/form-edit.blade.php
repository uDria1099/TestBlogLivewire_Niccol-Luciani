<div>
    {{-- @dd($services) --}}
    <form wire:submit='update' class="mb-5">
        <div class="mb-3">
            <label for="" class="form-label">Dai un nome al Viaggio</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="title" value="{{$travel->title}}">
        </div>
        <div class="mb-4">
            <label class="form-label mx-3">In Quale Continente</label>
            @foreach ($continents as $continent) 
                <input type="radio" id="{{$continent->id}}" name="continent" value="{{$continent->id}}" wire:model="continent_id">
                <label for="{{$continent->id}}">{{$continent->name}}</label>
            @endforeach
        </div>
      <div class="mb-4">
            <label class="form-label mx-3">Servizi</label>
            @foreach ($services as $service)
                <input type="checkbox" id="service-{{$service->id}}" name="" value="{{$service->id}}" wire:model="servizi">
                <label for="service-{{$service->id}}">{{$service->title}}</label>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrizione del Viaggio</label>
           <textarea class="form-control" id="" cols="30" rows="10" wire:model="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Immagine del Viaggio</label>
            <input type="file" class="form-control" id="exampleInputPassword1" wire:model="newImage">
        </div>
        <button type="submit" class="btn btn-primary me-5">Modifica Viaggio</button>
        <button type="button" class="btn btn-danger ms-5" wire:click="delete">Elimina Viaggio</button>
    </form>
</div>

