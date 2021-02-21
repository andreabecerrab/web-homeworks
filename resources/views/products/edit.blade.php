@extends('layouts.main')

@section('content')
<h1>Update a product</h1>


<form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Category</label>
        <input type="text" name="category">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="">Origin</label>
        <input type="text" name="origin">
    </div>
    <div>
        <label for="">Instruction to keep it healthy:</label>
        <input type="text" name="instruction">
    </div>
    <div>
        <input type="submit" value="Save">
    </div>
</form>
@endsection
