@extends('layouts.main')

@section('content')
<h1>Create Instruction for product</h1>
<form action="{{ route('instructions.store')}}" method="POST">
  @csrf
  <label for="id">Instruction for product with id:</label><br>
  <input type="text"  name="id" value ="{{app('request')->input('product')}}" > <br>

  <label for="name">Instruction to keep it healthy:</label><br>
  <input type="text"  name="instruction" ><br>
  <input type="submit" value="Submit">
</form>
@endsection
