@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Request a Leave</h1>
    <form action="{{ route('leaves.store') }}" method="POST">
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
            <label for="leave_type">Leave Type</label>
            <input type="text" name="leave_type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="reason">Reason</label>
            <textarea name="reason" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Request</button>
    </form>
</div>
@endsection
