<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center mb-5">TITOLO</h1>
            </div>
        </div>      
        @if (session('createTravel'))
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="alert alert-success text-center">{{session('createTravel')}}</div>
            </div>
        </div>
        @endif 
        @if (session('updateTravel'))
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="alert alert-success text-center">{{session('updateTravel')}}</div>
            </div>
        </div>
        @endif
        @if (session('deleteTravel'))
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="alert alert-success text-center">{{session('deleteTravel')}}</div>
            </div>
        </div>
        @endif
        @if (session('errorTravel'))
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="alert alert-success text-center">{{session('errorTravel')}}</div>
            </div>
        </div>
        @endif    
        <div class="row justify-content-center">
            @foreach ($continents as $continent)
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <x-card :continent="$continent"/>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>