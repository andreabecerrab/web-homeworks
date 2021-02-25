@extends('layouts.main')

@section('content')
<h1>Create recipe</h1>
<form action="{{ route('recipes.store') }}" method="POST">
  @csrf
  <select name="product_id" id ="product_id" class="form-control">
    <option value="">--Choose product ingredintes --</option>
    @foreach ($products as $product)
    <option value="{{ $product->id }}">{{ $product->name }}</option>

    @endforeach
    <br>
  <label for="name">Recipe name:</label><br>
  <input type="text"  name="name" ><br>
  <label for="ingredients">Extra Ingredients:</label><br>
  <input type="text"  name="ingredients"><br>
  <label for="body"> Instruction recipe: </label><br>
  <input type="text"  name="body"><br>

  <input type="submit" value="Submit">
</form>
@endsection