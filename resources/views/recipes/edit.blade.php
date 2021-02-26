@extends('layouts.main')

@section('content')
<div class="container-fluid">


<h1 class="text-center mx-auto">Edit your recipe here!</h1>
<br>
    <div class="d-flex justify-content-center">
        <form class="p-5 border border-secondary" action="{{ route('recipes.update', ['recipe' => $recipe]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">

            <label for="name">Name </label>
            <input type="text" name="name" value="{{ $recipe->name }}">
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
                <label for="ingredients">Ingredients: </label>
                <input type="text"  name="ingredients" value="{{ $recipe->ingredients}}"><br>
                <label for="body">Recipe: </label>
                <textarea class="form-control" name="body" value="{{ $recipe->body}}" rows="3"></textarea>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                        <input class="btn btn-success"  type="submit" value="Store">
            </div>
        </form>

    </div>
</div>
@endsection
