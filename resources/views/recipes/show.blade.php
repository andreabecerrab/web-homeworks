@extends('layouts.main')

@section('content')

<div style="padding:2rem;">
    <div class="card mb-2" style="width: 18rem;">
        <div class="card-header">
            <h4>{{ $recipe->name }}</h4>
        </div>
        <img class="card-img-top" src="{{ url('img/receta.jpg') }}" alt="Card image cap">
        <div class=" card-body ">
            <h5 class="card-title">{{ $recipe->name }}</h5>
            <p class="card-text"> Instructions: </p>
            <p class="card-text border-info">{{ $recipe->body}}</p>
            <p class="card-text"> Ingredients: </p>
            <p class="card-text border-info">{{ $recipe->ingredients}}</p>
            </div>
    </div>
</div>



@endsection
