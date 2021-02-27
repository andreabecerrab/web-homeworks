@extends('layouts.main')

@section('content')
<div class="row">
    <div style="padding: 2rem;" class="col">
        <div class="card " style="width: 18rem;">
            <img src="{{ url('img/product.jpg') }}" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $product->category }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $product->origin }}</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $product->description }}</li>
            </ul>
            <div class="card-body">
                <p>{{$product->instructions -> instruction}}</p>
            </div>
        </div>
    </div>
    <div style="padding: 2rem;" class="col">
        <h2 class="mb-3">Guides for this product</h2>
        @foreach ($product->guides as $item)
        <div class="card border-success" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->type }}</h6>
                <p class="card-text">{{ $item->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div style="padding: 2rem;" class="col">
        <h2 class="mb-3">Recipes</h2>
        <div class="card border-success" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->recipe->name }}</h5>
            </div>
        </div>
    </div>
</div>

@endsection
