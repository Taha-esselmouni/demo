@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row test">

     <div class="col-sm-6">
        <div class="card style="width: 18rem;">
            <div class="card-body">
                <img class="card-img-top img-fluid" width="100%" height="50%" src="{{asset('images/'.$cat->image)}}" alt="{{$cat->image}}">
                <h5 class="card-title">{{$cat->name}}</h5>
                <h6 class="card-title">{{$cat->price}}</h6>
                <p class="card-text">{{$cat->description}}</p>
                <a href="{{route('show',[$cat->id])}}" class="btn btn-primary">Go </a>
            </div>
        </div>
     </div>
        @endforeach
    </div>
  </div> --}}


        <div class="container" style="display: flex">
              @foreach ($product as $key => $cat)
              <div class="row test">
                    <div class="card" style="width: 20rem;">
                        <img src="{{asset('images/'.$cat->image)}}" class="card-img-top" width="100%" height="50%" alt="{{$cat->image}}">
                        <div class="card-body">
                            <h2 class="card-title">{{$cat->name}}</h2>
                            <h3 class="card-subtitle">{{$cat->price}}</h3>
                            <p class="card-text">{{$cat->description}}</p>
                            {{-- <a href="{{route('show',[$cat->id])}}" class="btn btn-primary">Go</a> --}}
                        </div>
                    </div>
              </div>
                @endforeach
        </div>





@endsection
