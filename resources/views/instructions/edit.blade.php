@extends('layouts.main')

@section('content')
<div style="padding: 2rem; width:500px;">
    <h1>Update an Instruction</h1>

    <form action="{{ route('instructions.update', ['instruction' => $instruction]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">New instruction: </label>
        <input type="text" name="instruction" class="form-control ">
        <input type="submit" value="Save" class="btn btn-success " >


    </form>
</div>
@endsection
