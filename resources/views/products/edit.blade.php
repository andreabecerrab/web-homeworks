@extends('layouts.main')

@section('content')
<div style="padding: 2rem;">
    <h1>Update a product</h1>
    <form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Name</label><br>
        <input type="text" name="name" value="{{$product->name}}"><br>
        <label for="">Category</label><br>
        <input type="text" name="category" value="{{$product->category}}"><br>
        <label for="">Description</label><br>
        <input type="text" name="description" value="{{$product->description}}"><br>
        <label for="">Origin</label><br>
        <input type="text" name="origin" value="{{$product->origin}}"><br>
        <label for="">Product nutrition content:</label><br>
        <input type="text" name="instruction" value="{{$product->instructions->instruction}}"><br>

        <input type="submit" value="Save" style="margin-top:2rem;">
    </form>
</div>
@endsection
