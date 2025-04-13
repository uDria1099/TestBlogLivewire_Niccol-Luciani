<div>
    <form wire:submit='store'>
        <div class="mb-3">
            <label for="" class="form-label">Dai un nome al Viaggio</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model='title'>
        </div>
        <div class="mb-4">
            <label class="form-label mx-3">In Quale Continente</label>
            @foreach ($continents as $continent) 
                <input type="radio" id="{{$continent->id}}" name="continent" value="{{$continent->id}}" wire:model='continent_id'>
                <label for="{{$continent->id}}">{{$continent->name}}</label>
            @endforeach
        </div>
        <div class="mb-4">
            <label class="form-label mx-3">Servizi</label>
            @foreach ($services as $service) 
                <input type="radio" id="{{$service->id}}" name="service" value="{{$service->id}}" wire:model='services'>
                <label for="{{$service->id}}">{{$service->title}}</label>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descrizione del Viaggio</label>
           <textarea class="form-control" id="" cols="30" rows="10" wire:model='description'></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Immagine del Viaggio</label>
            <input type="file" class="form-control" id="exampleInputPassword1" wire:model='image'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
