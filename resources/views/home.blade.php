@extends('layouts.app')

@section('content')



        <div class="container" style="display:inline-flex">
            @if (count($product) > 0)
              @foreach ($product as $key => $cat)
              <div class="row test">
                    <div class="card" style="width: 20rem;">
                        <img src="{{asset('images/'.$cat->image)}}" class="card-img-top" width="100%" height="50%" alt="{{$cat->image}}">
                        <div class="card-body">
                            <h2 class="card-title">{{$cat->name}}</h2>
                            <h3 class="card-subtitle">{{$cat->price}}</h3>
                            <p class="card-text">{{$cat->description}}</p>
                            <a href="" class="btn btn-primary">Go</a>
                        </div>
                    </div>
              </div>
                @endforeach
                @else
                            <p class="text-muted">
                                No category to display
                            </p>
                            @endif
        </div>





@endsection
