@extends('layouts.main')

@section('content')
<h1>Edit your guide here!</h1>
<form action="{{ route('recipes.update', ['recipe' => $recipe]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name </label>
        <input type="text" name="name" value="{{ $recipe->name }}">
        <label for="ingredients">Ingredients: </label>
        @foreach ($productos as $producto)
        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
        @endforeach
        <label for="body">Recipe: </label>
        <input type="text" name="body" value="{{ $recipe->body}}">
  
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection