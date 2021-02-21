@extends('layouts.main')
@section('content')


<h1>List of guides</h1>

<p>
    <a href="{{route('guides.create')}}"> Create a guide </a>
</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guides as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('guides.show', ['guide' => $item]) }}">
                        Show
                    </a> |
                    <a href="{{ route('guides.edit', ['guide' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('guides.destroy', ['guide' => $item]) }}" method="post">
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