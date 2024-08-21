@extends('layouts.app')

@section('content')
<h1>edit Employee</h1>
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">employee Name:</label>
    <input type="text" id="name" name="name" value="{{ $employee->name }}">

    <label for="department_id">department:</label>
    <select id="department_id" name="department_id">
        @foreach ($departments as $department)
        <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>
            {{ $department->name }}
        </option>
        @endforeach
    </select>

    <button type="submit">update</button>
</form>
@endsection
