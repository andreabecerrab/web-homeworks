@extends('layouts.main')

@section('content')
<div class="row" >
    <div style="padding: 2rem;" class="col">
        <div class="card " style="width: 18rem;">
            <img src="{{ url('img/nutrition.jpg') }}" class="card-img-top" >

            <div class="card-body">
                <h5 class="card-title">{{ $guide->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $guide->type }}</h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $guide->description }}</li>
            </ul>
        </div>
    </div>
    <div style="padding: 2rem;" class="col">
        <h2 class="mb-3">Products that belong to his guide</h2>
        @foreach ($guide->products as $item)
        <div class="card border-info" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->category }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->origin }}</h6>
                <p class="card-text">{{ $item->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
