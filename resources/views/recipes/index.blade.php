@extends('layouts.main')
@section('content')

<div style="padding: 2rem;width:500px;">
<h1>List of recipes</h1>
    <p>
        <a href="{{route('recipes.create')}}"> Create a recipe </a>
    </p>

<br>
<br>


    @foreach ($recipes as $recipe)
        <div class="card mb-2">
            <div class="card-header">
                <h4>receta id:   {{ $recipe->id }}</h4>

            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $recipe->name }}</h5>
                <p class="card-text"> Instructions: </p>
                <p class="card-text">{{ $recipe->body}}</p>

                <a class="btn btn-primary text-center" href="{{ route('recipes.show', ['recipe' => $recipe]) }}">
                    <img class="card-img-top" src="{{ url('img/show.svg') }}" alt="Card image cap">       
                                  
                </a>

                <a href="{{ route('recipes.edit', ['recipe' => $recipe]) }}" class="btn btn-primary">
                    <img class="card-img-top" src="{{ url('img/editt.svg') }}" alt="Card image cap">   
                </a>
                <div class="mt-2">

                <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>

                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
