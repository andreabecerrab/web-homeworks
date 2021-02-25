@extends('layouts.main')
@section('content')

<div class="container-fluid">
<h1 class="text-center mx-auto" >List of recipes</h1>

<br>
<br>
<br>

<!-- <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td>{{ $recipe->name }}</td>
                <td>
                    <a href="{{ route('recipes.show', ['recipe' => $recipe]) }}">
                        Show
                    </a> 
                    <a href="{{ route('recipes.edit', ['recipe' => $recipe]) }}">
                        Update
                    </a>
                    <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> -->
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

    <br>
    <br>
    <br>
    <div class="d-flex justify-content-center">
    <p>
        <a  class="btn btn-primary text-center row align-items-center" href="{{route('recipes.create')}}"> Create a recipes </a>
    </p>
    </div>
</div>

@endsection