@extends('layouts.main')

@section('content')
<div class="container-fluid">
<h1 class="text-center mx-auto">Create recipe</h1>
<br>
  <div class="d-flex justify-content-center">
  <!-- <form action="{{ route('recipes.store') }}" method="POST">
    @csrf
    <select name="product_id" id ="product_id" class="form-control">
      <option value="">--Choose product ingredintes --</option>
      @foreach ($products as $product)
      <option value="{{ $product->id }}">{{ $product->name }}</option>

      @endforeach
      <br>
    <label for="name">Recipe name:</label><br>
    <input type="text"  name="name" ><br>
    <label for="ingredients">Extra Ingredients:</label><br>
    <input type="text"  name="ingredients"><br>
    <label for="body"> Instruction recipe: </label><br>
    <input type="text"  name="body"><br>

    <input type="submit" value="Submit">
  </form> -->

  <form class="p-5 border border-secondary" action="{{ route('recipes.store') }}" method="POST">
    
        <div class="form-group">
        @csrf
        <label for="name">Recipe name:</label>
        <input type="text"  name="name" >
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Choose product ingredintes</label>
            <select name="product_id" id ="product_id" class="form-control">
                @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>

                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="ingredients">Extra Ingredients:</label>
            <input type="text"  name="ingredients">
            <br>
            <label for="body"> Instruction recipe: </label>
            <textarea class="form-control" name="body"  rows="3"></textarea>
        </div>
        <br>

        <div class="d-flex justify-content-center">
                    <input type="submit" value="Submit">
        </div>
    </form>
  </div>
</div>
@endsection