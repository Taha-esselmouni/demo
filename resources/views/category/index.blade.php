@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('info'))

            <div class="alert alert-success">{{Session::get('info')}}</div>

            @endif
            <div class="card">
                <div class="card-header">Manage Product Categories</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categories) > 0)
                            @foreach ($categories as $key => $cat)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$cat->name}}</td>
                                <td>
                                    <a href="{{route('category.edit',[$cat->id])}}">
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

                                        <form action="{{route('category.destroy',[$cat->id])}}" method="POST">@csrf
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

                                                        {{-- <div class="modal" id="exampleModal{{$cat->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                         <form action="{{route('category.destroy',[$cat->id])}}" method="POST">@csrf
                                            @method('DELETE')
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                         </form>
                    </div>
                    </div> --}}

                                </td>
                            </tr>
                            @endforeach

                            @else
                            <p class="text-muted">
                                No category to display
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
