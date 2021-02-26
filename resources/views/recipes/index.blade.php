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
                                    Show
                </a>

                <a href="{{ route('recipes.edit', ['recipe' => $recipe]) }}" class="btn btn-primary">
                                    Update
                </a>
                <div class="mt-2">

                <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>

                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection
