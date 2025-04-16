<div class="card mx-auto text-center" style="width: 18rem; padding: 1rem;">
  <img src="{{$continent->image}}" class="card-img-top rounded mb-3" alt="{{$continent->name}}" style="max-height: 200px; object-fit: cover;">
  <div class="card-body">
      <h5 class="card-title">{{$continent->name}}</h5>
      <a href="{{route('trips.continent', compact('continent'))}}" class="btn btn-primary mt-3">VIAGGI</a>
  </div>
</div>