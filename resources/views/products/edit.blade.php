@extends('layouts.main')

@section('content')
<div style="padding: 2rem;width:500px;">
    <h1>Update a product</h1>
    <form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Name</label><br>
        <input type="text" name="name" value="{{$product->name}}" class="form-control"><br>
        <label for="">Category</label><br>
        <input type="text" name="category" value="{{$product->category}}" class="form-control"><br>
        <label for="">Description</label><br>
        <input type="text" name="description" value="{{$product->description}}" class="form-control"><br>
        <label for="">Origin</label><br>
        <input type="text" name="origin" value="{{$product->origin}}" class="form-control"><br>
        <label for="">Product nutrition content:</label><br>
        <input type="text" name="instruction" value="{{$product->instructions->instruction}}" class="form-control"><br>

        <select name="recipe_id" id ="recipe_id" class="form-control">
            <option value="">--Choose recipes--</option>
                @foreach ($recipes as $recipe)
                        <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                @endforeach
            </select>

        <h3>Guides where the product belongs to:</h3>
        @foreach ($guides as $item)
            <input type="checkbox" value="{{ $item->id }}" name="guides[]">
            <label for="{{ $item->id }}"> {{ $item->name }}</label><br>
        @endforeach

        <input type="submit" value="Store" style="margin-top:2rem;" class="btn btn-success">
    </form>
</div>
@endsection
