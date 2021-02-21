@extends('layouts.main')

@section('content')
<h1>Update a product</h1>

<form action="{{ route('instructions.update', ['instruction' => $instruction]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">New instruction: </label>
        <input type="text" name="instruction">
    </div>
    <div>
        <input type="submit" value="Save">
    </div>
</form>
@endsection
