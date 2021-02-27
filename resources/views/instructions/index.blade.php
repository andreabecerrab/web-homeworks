@extends('layouts.main')

@section('content')
<div style="padding: 2rem;">
    <h1>List of instructions</h1>
    <p>
        <a href="{{ route('instructions.create') }}">Create a instruction</a>
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>Instruction</th>
                <th>Edit</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instructions as $item)
                <tr>
                    <td>{{ $item->instruction }}</td>
                    <td>
                        <a href="{{ route('instructions.edit', ['instruction' => $item]) }}">
                            <span class="material-icons">
                                mode
                            </span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('instructions.show', ['instruction' => $item]) }}">
                            <span class="material-icons">
                                visibility
                            </span>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('instructions.destroy', ['instruction' => $item]) }}" method="post">
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
