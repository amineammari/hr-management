@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Leave Request</h1>
    <form action="{{ route('leaves.update', $leaveRequest->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control" required>
                <option value="pending" {{ $leaveRequest->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $leaveRequest->status == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $leaveRequest->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
</div>
@endsection
