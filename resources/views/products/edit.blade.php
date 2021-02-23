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

        <input type="submit" value="Save" style="margin-top:2rem;" class="btn btn-success">
    </form>
</div>
@endsection
