@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('info'))

            <div class="alert alert-success">{{Session::get('info')}}</div>

            @endif
            <div class="card" style="margin-right: -100px">
                <div class="card-header">Product</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                 <th scope="col">Description</th>
                                  <th scope="col">price</th>
                                   <th scope="col">Category</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($product) > 0)
                            @foreach ($product as $key => $cat)
                            <tr>
                            <td><img width="50px" height="50px" src="{{asset('images/'.$cat->image)}}"></td>
                                <td>{{$cat->name}}</td>
                                  <td>{{$cat->description}}</td>
                                   <td>{{$cat->price}}</td>
                                    <td>{{$cat->category_id}}</td>
                                <td>
                                    <a href="{{route('product.edit',[$cat->id])}}">
                                        <button class="btn btn-outline-success">Edit</button>
                                    </a>

                                </td>
                                <td>


                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal{{$cat->id}}">
                                                Delete
                                          </button>

                                    <div class="modal fade" id="exampleModal{{$cat->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">

                                        <form action="{{route('product.destroy',[$cat->id])}}" method="POST">@csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   Are you sure ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach

                            @else
                            <p class="text-muted">
                                No product to display
                            </p>
                            @endif

                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
</div>
@endsection
