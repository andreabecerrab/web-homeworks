@extends('layouts.main')
@section('content')

<div style="padding: 2rem;">
    <h1>List of guides for maintain the prodcuts in good condition</h1>
    <!-- create row -->
    <p>
        <a href="{{route('guides.create')}}"> Create a guide </a>
    </p>


    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guides as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('guides.show', ['guide' => $item]) }}">
                            <span class="material-icons">
                                visibility
                            </span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('guides.edit', ['guide' => $item]) }}">
                            <span class="material-icons">
                                mode
                            </span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('guides.destroy', ['guide' => $item]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
