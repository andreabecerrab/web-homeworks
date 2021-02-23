@extends('layouts.main')

@section('content')
<div style="padding: 2rem;">
    <h1>List of products</h1>
    <!-- create row -->
    <p>
        <a href="{{ route('products.create') }}">Create a product</a>
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Content</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
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
                        <a href="{{ route('products.show', ['product' => $item]) }}">
                            <span class="material-icons">
                                visibility
                            </span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', ['product' => $item]) }}">
                            <span class="material-icons">
                                mode
                            </span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', ['product' => $item]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger">

                            </input>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
