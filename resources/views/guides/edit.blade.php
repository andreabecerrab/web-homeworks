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
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
