@extends('layouts.app')

@section('content')
<h1>Edit Department</h1>
<form action="{{ route('departments.update', $department->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Department Name:</label>
    <input type="text" id="name" name="name" value="{{ $department->name }}">
    <button type="submit">Update</button>
</form>
@endsection
