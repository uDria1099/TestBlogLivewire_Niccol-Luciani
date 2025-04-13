<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($travel->image)}}" class="card-img-top" alt="{{$travel->title}}">
    <div class="card-body">
      <h5 class="card-title">{{$travel->title}}</h5>
      <a href="{{route('travel.show', compact('travel'))}}" class="btn btn-primary">vai al viaggio</a>
    </div>
  </div>