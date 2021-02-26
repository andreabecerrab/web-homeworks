@extends('layouts.main')

@section('content')
<h1>Instruction </h1>
<h1>Product name: {{$product}} </h1>
<h2>{{ $instruction->instruction }}</h2>
@endsection
