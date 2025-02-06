@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Salary Details</h1>
    <p><strong>Employee:</strong> {{ $salary->employee->first_name }} {{ $salary->employee->last_name }}</p>
    <p><strong>Base Salary:</strong> {{ $salary->base_salary }}</p>
    <p><strong>Bonus:</strong> {{ $salary->bonus }}</p>
    <p><strong>Deductions:</strong> {{ $salary->deductions }}</p>
    <p><strong>Payment Date:</strong> {{ $salary->payment_date }}</p>
    <a href="{{ route('salaries.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection