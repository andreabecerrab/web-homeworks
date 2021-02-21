@extends('layouts.main')
@section('content')


<h1>Create your guide here!</h1>
<div>
    <form action="{{ route('guides.store') }}" method="POST">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="name">
    <input type="submit" value="Guardar">


</form>
</div>

@endsection