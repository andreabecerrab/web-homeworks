@extends('layouts.main')

@section('content')
<h1>Create Instruction for product</h1>
<form action="{{ route('instructions.store', [product => $product]) }}" method="POST">
  @csrf
  <label for="name">Instruction to keep it healthy:</label><br>
  <input type="text"  name="instruction" ><br>
  <input type="submit" value="Submit">
</form>
@endsection
