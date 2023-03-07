@extends('layouts.master')
@section('title','Add Customer')
@section('content')
    <h1>Add Customer</h1>
    <div>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <button type="submit">Add Customer</button>
        </form>
    </div>
@endsection
