
@extends('layouts.app')

@section('content')
<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Create</a>
<table>
    <thead>
        <tr>
            <th>name</th>
            <th>department</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->department->name }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
