@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('content')
<div class="container ">
    <div class="card">
        <div class="card-header">
            <h2>Driver Information <img src="" alt=""></h2>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> </li>
                <li class="list-group-item"><strong>Name:</strong> </li>
                <li class="list-group-item"><strong>License Number:</strong> </li>
                <li class="list-group-item"><strong>Contact Number:</strong> </li>
                <li class="list-group-item"><strong>Address:</strong> </li>
                <li class="list-group-item"><strong>Performance:</strong> </li>
                <li class="list-group-item"><strong>Driving History:</strong> </li>
                <!-- Add more personal information fields as needed -->
            </ul>
        </div>
    </div>
</div>
@endsection
