@extends('layouts.main')

@section('content')
<div style="padding: 2rem; width:500px;">
    <h1>Create product</h1>
    <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text"  name="name" class="form-control"><br>
    <label for="category">Category:</label><br>
    <input type="text"  name="category" class="form-control" ><br>
    <label for="description">Description:</label><br>
    <input type="text"  name="description" class="form-control"><br>
    <label for="origin">Origin:</label><br>
    <input type="text"  name="origin" class="form-control"><br>

    <label for="instruction">Product nutrition content:</label><br>
    <input type="text"  name="instruction" class="form-control"><br>

    <label style="margin-top:2rem;">Select guide(s) for this product</label></br>
    @foreach ($guides as $item)
            <input type="checkbox" name="guides[]" value="{{ $item->id }}">
            <label for="{{ $item->id }}"> {{ $item->name }}</label><br>
    @endforeach

    <input type="submit" value="Save" style="margin-top:2rem;" class="btn btn-success">
    </form>
</div>
@endsection
