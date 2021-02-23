@extends('layouts.main')

@section('content')
<div style="padding: 2rem;">
    <h1>List of instructions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Instruction</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($instructions as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->instruction }}</td>
                    <td>
                        <a href="{{ route('instructions.edit', ['instruction' => $item]) }}">
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
