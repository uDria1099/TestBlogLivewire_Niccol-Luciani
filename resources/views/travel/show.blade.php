<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center mb-4">{{$travel->title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mb-4">
                    <p class="lead">{{$travel->description}}</p>
                    <img src="{{Storage::url($travel->image)}}" alt="Travel Image" class="img-fluid rounded">
                </div>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{route('travel.edit', compact('travel'))}}" class="btn btn-secondary btn-lg">Modifica</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>