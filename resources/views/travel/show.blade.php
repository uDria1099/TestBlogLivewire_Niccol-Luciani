<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center m-5">{{$travel->title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <p>{{$travel->description}}</p>
            <img src="{{Storage::url($travel->image)}}" alt="">
            <a href="{{route('travel.edit', compact('travel'))}}" class="btn btn-secondary">modifica</a>
            </div>
        </div>
    </div>
    
</x-layout>