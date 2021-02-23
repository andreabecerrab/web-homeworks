@extends('layouts.main')
@section('content')


<h1>Create your guide here!</h1>
<div>
    <form action="{{ route('guides.store') }}" method="POST">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="name">
    <label for="">Tipo</label>
    <input type="text" name="type">
    <label for="">Descripcion</label>
    <input type="text" name="description"><br>

    @foreach ($products as $item)
        <input type="checkbox" value="{{ $item->id }}" name="products[]">
        <label for="{{ $item->id }}"> {{ $item->name }}</label><br>
    @endforeach

    <input type="submit" value="Guardar">
</form>
</div>

@endsection
