<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center m-5">{{$continent->name}}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @if (session('createTravel'))
            <div class="alert alert-success">{{session('createTravel')}}</div>
            @endif
            <div class="row justify-content-center">
                @foreach ($travels as $travel)
                <div class="col-12 col-md-4 mt-3">
                    <x-card-travel :travel="$travel"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>  
</x-layout>