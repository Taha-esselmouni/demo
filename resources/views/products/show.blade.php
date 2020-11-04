@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('info'))

            <div class="alert alert-success">{{Session::get('info')}}</div>

            @endif


         <div class="card-body">
                <div class="form-group">

                     <label for="name">category</label>
                    <input type="text" name="name" class="form-control" value="{{$produit->name}}">
                </div>
        </div>








        </div>
    </div>
</div>
@endsection
