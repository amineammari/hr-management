@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Salary</h1>
    <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="base_salary">Base Salary</label>
            <input type="number" name="base_salary" class="form-control" value="{{ $salary->base_salary }}" required>
        </div>
        <div class="form-group">
            <label for="bonus">Bonus</label>
            <input type="number" name="bonus" class="form-control" value="{{ $salary->bonus }}">
        </div>
        <div class="form-group">
            <label for="deductions">Deductions</label>
            <input type="number" name="deductions" class="form-control" value="{{ $salary->deductions }}">
        </div>
        <div class="form-group">
            <label for="payment_date">Payment Date</label>
            <input type="date" name="payment_date" class="form-control" value="{{ $salary->payment_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection