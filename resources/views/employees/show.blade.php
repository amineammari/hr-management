@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Details</h1>
    <p><strong>First Name:</strong> {{ $employee->first_name }}</p>
    <p><strong>Last Name:</strong> {{ $employee->last_name }}</p>
    <p><strong>Email:</strong> {{ $employee->email }}</p>
    <p><strong>Position:</strong> {{ $employee->position }}</p>
    <p><strong>Department:</strong> {{ $employee->department }}</p>
    <p><strong>Hire Date: </strong>{{ \Carbon\Carbon::parse($employee->hire_date)->format('Y-m-d') }}</p>
    <p><strong>Phone:</strong> {{ $employee->phone }}</p>
    <p><strong>Address:</strong> {{ $employee->address }}</p>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
