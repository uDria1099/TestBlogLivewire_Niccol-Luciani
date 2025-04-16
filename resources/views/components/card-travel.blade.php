<div class="card mx-auto text-center" style="width: 18rem; padding: 1rem;">
  <img src="{{Storage::url($travel->image)}}" class="card-img-top rounded mb-3" alt="{{$travel->title}}" style="max-height: 200px; object-fit: cover;">
  <div class="card-body">
      <h5 class="card-title">{{$travel->title}}</h5>
      <a href="{{route('travel.show', compact('travel'))}}" class="btn btn-primary mt-3">Vai al viaggio</a>
  </div>
</div>