@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leave Request Details</h1>
    <p><strong>Employee:</strong> {{ $leaveRequest->employee->first_name }} {{ $leaveRequest->employee->last_name }}</p>
    <p><strong>Leave Type:</strong> {{ $leaveRequest->leave_type }}</p>
    <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($leaveRequest->start_date)->format('Y-m-d') }}</p>
    <p><strong>End Date:</strong> {{ \Carbon\Carbon::parse($leaveRequest->end_date)->format('Y-m-d') }}</p>
    <p><strong>Reason:</strong> {{ $leaveRequest->reason }}</p>
    <p><strong>Status:</strong> {{ $leaveRequest->status }}</p>
    <a href="{{ route('leaves.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
