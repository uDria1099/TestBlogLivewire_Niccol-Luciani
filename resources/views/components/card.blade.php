<div class="card" style="width: 18rem;">
    <img src="{{$continent->image}}" class="card-img-top" alt="{{$continent->image}}">
    <div class="card-body">
      <h5 class="card-title">{{$continent->name}}</h5>
      <a href="{{route('trips.continent', compact('continent'))}}" class="btn btn-primary">VIAGGI</a>
    </div>
  </div>