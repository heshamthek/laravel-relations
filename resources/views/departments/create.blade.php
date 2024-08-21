@extends('layouts.app')

@section('content')
<h1>create department</h1>
<form action="{{ route('departments.store') }}" method="POST">
    @csrf
    <label for="name">department Name:</label>
    <input type="text" id="name" name="name">
    <button type="submit">create</button>
</form>
@endsection
