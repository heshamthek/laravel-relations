@extends('layouts.app')

@section('content')
<h1>create employee</h1>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label for="name">employee Name:</label>
    <input type="text" id="name" name="name">
    
    <label for="department_id">department:</label>
    <select id="department_id" name="department_id">
        @foreach ($departments as $department)
        <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    
    <button type="submit">create</button>
</form>
@endsection
