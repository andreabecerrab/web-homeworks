@extends('layouts.main')

@section('content')
<h1>List of products</h1>
<p>
    <a href="{{ route('products.create') }}">Create a product</a>
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('products.show', ['product' => $item]) }}">
                        Show
                    </a> |
                    <a href="{{ route('products.edit', ['product' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('products.destroy', ['product' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
