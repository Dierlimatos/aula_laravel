@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Categorias
                <a class="btn btn-primary" href="{{route('categories.create')}}">nova categoria</a>
                
                </div>

                

                <div class="card-body">
              
                  <table class="table">
                  <thead>
                  <tr>
                  <th>id</th>
                  <th>titulo</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($categories as $category)
                  <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
