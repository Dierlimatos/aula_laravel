@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">nova categoria</div>

                <div class="card-body">
              
                 <form method="POST" action="{{route('categories.store')}}">
                 @csrf
                <label>titulo:</label>
                <input name="title"/>

                <label> tipo:</label>
                <select name="type">
                <option value="1">entrada</option>
                <option value="2">saida</option>       
                </select> 

                <button type="submit"> salvar </button>
                 </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
