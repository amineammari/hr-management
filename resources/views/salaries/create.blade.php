@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Salary</h1>
    <form action="{{ route('salaries.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee_id">Employee</label>
            <select name="employee_id" class="form-control" required>
                @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="base_salary">Base Salary</label>
            <input type="number" name="base_salary" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bonus">Bonus</label>
            <input type="number" name="bonus" class="form-control">
        </div>
        <div class="form-group">
            <label for="deductions">Deductions</label>
            <input type="number" name="deductions" class="form-control">
        </div>
        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection