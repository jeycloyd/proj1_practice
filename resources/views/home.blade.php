@extends('layouts.master')
@section('title','Home')
@section('content')
    <h1>Homepage</h1>
    <div>
        <ul>
            <li>
                <a href="/customers/create">Add Costumer</a>
            </li>
            <li>
                <a href="/quotations/create">Add Quotation</a>
            </li>
            <li>
                <a href="/customers/index">View Costumers</a>
            </li>
            <li>
                <a href="/quotations/index">View Quotations</a>
            </li>
        </ul>
    </div>
@endsection