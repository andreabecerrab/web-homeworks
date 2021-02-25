@extends('layouts.main')

@section('content')
<h1>Edit your recipe here!</h1>
<form action="{{ route('recipes.update', ['recipe' => $recipe]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <select name="product_id" id ="product_id" class="form-control">
            <option value="">--Choose product ingredintes --</option>
            @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>

            @endforeach
        <label for="name">Name </label>
        <input type="text" name="name" value="{{ $recipe->name }}">
        <label for="ingredients">Ingredients: </label>
        <input type="text"  name="ingredients" value="{{ $recipe->ingredients}}"><br>
        <label for="body">Recipe: </label>
        <input type="text" name="body" value="{{ $recipe->body}}">
  
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection