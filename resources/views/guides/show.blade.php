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
@endsection