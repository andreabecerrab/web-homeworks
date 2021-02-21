@extends('layouts.main')

@section('content')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $guide->id }}</td>
            <td>{{ $guide->name }}</td>
        </tr>
    </tbody>
</table>
@endsection