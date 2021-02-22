@extends('layouts.main')

@section('content')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $guide->id }}</td>
            <td>{{ $guide->name }}</td>
            <td>{{ $guide->type }}</td>
            <td>{{ $guide->description }}</td>
        </tr>
    </tbody>
</table>
<h2>Products that belong to this guide</h2>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Origin</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guide->products as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->origin }}</td>
                <td>{{ $item->description }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

@endsection