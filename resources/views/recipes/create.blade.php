@extends('layouts.main')

@section('content')
<h1>Create recipes</h1>
<form action="{{ route('recipes.store') }}" method="POST">
  @csrf
  <label for="name">Recipe name:</label><br>
  <input type="text"  name="name" ><br>
  <label for="ingredients">Ingredients:</label><br>
  @foreach ($productos as $producto)
    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
 @endforeach
  <label for="body">Recipe:</label><br>
  <input type="text"  name="body"><br>
  <input type="submit" value="Submit">
</form>
@endsection