@extends('layouts.main')

@section('content')
<h1>List of instructions</h1>
<!-- create row -->

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Instruction</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($instructions as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->instruction }}</td>
                <td>
                    <a href="{{ route('instructions.edit', ['instruction' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('instructions.destroy', ['instruction' => $item]) }}" method="post">
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
