@extends('layouts.main')
@section('content')

<div style="padding: 2rem;width:500px;">
    <h1>Create your guide here!</h1>
    <div>
        <form action="{{ route('guides.store') }}" method="POST">
        @csrf
        <label for="">Name</label><br>
        <input type="text" name="name"  class="form-control"><br>
        <label for="">Type</label><br>
        <input type="text" name="type"  class="form-control"><br>
        <label for="">Description</label><br>
        <input type="text" name="description"  class="form-control"><br>

        <label for="" class="mt-2">Select products for this guide:</label><br>
        @foreach ($products as $item)
            <input type="checkbox" value="{{ $item->id }}" name="products[]">
            <label for="{{ $item->id }}"> {{ $item->name }}</label><br>
        @endforeach

        <input type="submit" value="Save" style="margin-top:2rem;" class="btn btn-success">
    </form>
    </div>
</div>

@endsection
