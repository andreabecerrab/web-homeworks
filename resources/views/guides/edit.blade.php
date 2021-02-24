@extends('layouts.main')

@section('content')
<div style="padding: 2rem; width:500px;">
    <h1>Edit guide</h1>
    <form action="{{ route('guides.update', ['guide' => $guide]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Name</label><br>
        <input type="text" name="name" value="{{ $guide->name }}"  class="form-control"><br>
        <label for="">Type</label><br>
        <input type="text" name="type" value="{{ $guide->type }}"  class="form-control"><br>
        <label for="">Description</label><br>
        <input type="text" name="description" value="{{ $guide->description }}"  class="form-control"><br>

        <h3>Products that belong to this guide:</h3>
        @foreach ($products as $item)
            <input type="checkbox" value="{{ $item->id }}" name="products[]">
            <label for="{{ $item->id }}"> {{ $item->name }}</label><br>
        @endforeach

        <input type="submit" value="Store" style="margin-top:2rem;" class="btn btn-success" >

    </form>
</div>
@endsection
