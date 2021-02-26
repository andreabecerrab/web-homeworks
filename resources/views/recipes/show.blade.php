@extends('layouts.main')

@section('content')


<div class="container-fluid">
    <h1 class="text-center mx-auto" >{{ $recipe->name }}</h1>
    <br>
    <div class="d-flex justify-content-center row ">
        <div class="font-weight-bold col-9 ">Ingredientes extra: {{$recipe->ingredients}}</div>
        <div class="col-9 font-weight-bold"> Instrucciones :<br> {{ $recipe->body}}</div>
    </div>
</div>

@endsection
