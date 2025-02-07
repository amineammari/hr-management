@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Leave Request</h1>
    <form action="{{ route('employee.storeLeaveRequest') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="leave_type">Leave Type</label>
            <input type="text" class="form-control" id="leave_type" name="leave_type" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="reason">Reason</label>
            <textarea class="form-control" id="reason" name="reason" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
