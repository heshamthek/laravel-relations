@extends('layouts.app')

@section('content')
<h1>departments</h1>
<a href="{{ route('departments.create') }}">create</a>
<table>
    <thead>
        <tr>
            <th>name</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department->name }}</td>
            <td>
                <a href="{{ route('departments.edit', $department->id) }}">Edit</a>
                <form action="{{ route('departments.destroy', $department->id) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
