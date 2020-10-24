@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            @if (Session::has('message'))

          <div class="alert alert-success">{{Session::get('message')}}</div>

            @endif




        <form action="{{route('product.update',[$product->id])}}" method="POST">@csrf
            @method('PUT')
                <div class="card">
                <div class="card-header">Update food Category</div>

                <div class="card-body">
                   <div class="form-group">

                    <label for="name">Name</label>
                   <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>
                    <div class="form-group">

                    <label for="name">description</label>
                   <input type="text" name="description" class="form-control" value="{{$product->description}}">
                </div>
                    <div class="form-group">

                    <label for="name">price</label>
                   <input type="text" name="price" class="form-control" value="{{$product->price}}">
                </div>


                   <div class="form-group">

                          <button class="btn btn-outline-primary">update</button>
                    </div>
            </div>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
