@extends('layouts.main')
@section('content')


<h1>List of recipes</h1>

<p>
    <a href="{{route('recipes.create')}}"> Create a recipes </a>
</p>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recipes as $recipe)
            <tr>
                <td>{{ $recipe->id }}</td>
                <td>{{ $recipe->name }}</td>
                <td>
                    <a href="{{ route('recipes.show', ['recipe' => $recipe]) }}">
                        Show
                    </a> 
                    <a href="{{ route('recipes.edit', ['recipe' => $recipe]) }}">
                        Update
                    </a>
                    <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="post">
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