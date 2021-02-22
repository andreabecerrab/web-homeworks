@extends('layouts.main')

@section('content')
<h1>Create products</h1>
<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <label for="name">Name:</label><br>
  <input type="text"  name="name" ><br>
  <label for="category">Category:</label><br>
  <input type="text"  name="category" ><br>
  <label for="description">Description:</label><br>
  <input type="text"  name="description"><br>
  <label for="origin">Origin:</label><br>
  <input type="text"  name="origin" ><br>

  @foreach ($guides as $item)
        <input type="checkbox" id={{ $item->id }} name={{ $item->name }} value={{ $item->name }}>
        <label for={{ $item->id }}> {{ $item->name }}</label><br>
  @endforeach

  <input type="submit" value="Submit">
</form>
@endsection
