@extends('layouts.main')

@section('content')
<div style="padding: 2rem; width:500px;">
  <h1>Create Instruction for product</h1>
  <form action="{{ route('instructions.store')}}" method="POST">
    @csrf
    <label for="id">Instruction for product with id:</label><br>
    <input type="text" class="form-control" name="id" value ="{{app('request')->input('product')}}" > <br>
    <label for="name">Instruction to keep it healthy:</label><br>
    <input type="text" class="form-control" name="instruction" ><br>
    <input type="submit" value="Save" style="margin-top:2rem;" class="btn btn-success">
  </form>
</div>  
@endsection
