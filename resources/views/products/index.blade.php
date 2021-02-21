@extends('layouts.main')

@section('content')
<h1>List of products</h1>
<p>
    <a href="{{ route('products.create') }}">Create a product</a>
</p>
<p>
    <a href="{{ route('instructions.index') }}">View instructions</a>
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Instruction</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <!-- show instruction if it has one -->
                @if ($item -> instructions != null)
                <td>{{ $item -> instructions -> instruction }}</td>
                @endif
                <td>
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
