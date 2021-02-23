@extends('layouts.main')

@section('content')
<h1>Edit your guide here!</h1>
<form action="{{ route('guides.update', ['guide' => $guide]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $guide->name }}">
    </div>
    <div>
        <label for="">Type</label>
        <input type="text" name="type" value="{{ $guide->type }}">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" value="{{ $guide->description }}">
    </div>
    <h1>Products that belong to this guide:</h1>
    @foreach ($products as $item)
        <input type="checkbox" value="{{ $item->id }}" name="products[]">
        <label for="{{ $item->id }}"> {{ $item->name }}</label><br>
    @endforeach
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
