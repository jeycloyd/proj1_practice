@extends('layouts.master')
@section('title','Add Quotation')
@section('content')
    <h1>Add Quotation</h1>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <button type="submit">Add Customer</button>
    </form>
@endsection