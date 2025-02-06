@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leave Requests</h1>
    <a href="{{ route('leaves.create') }}" class="btn btn-primary">Add Leave Request</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Leave Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leaveRequests as $leave)
            <tr>
                <td>{{ $leave->id }}</td>
                <td>{{ $leave->employee->first_name }} {{ $leave->employee->last_name }}</td>
                <td>{{ $leave->leave_type }}</td>
                <td>{{ \Carbon\Carbon::parse($leave->start_date)->format('Y-m-d') }}</td>
                <td>{{ \Carbon\Carbon::parse($leave->end_date)->format('Y-m-d') }}</td>
                <td>{{ $leave->status }}</td>
                <td>
                    <a href="{{ route('leaves.show', $leave->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('leaves.edit', $leave->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('leaves.destroy', $leave->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
