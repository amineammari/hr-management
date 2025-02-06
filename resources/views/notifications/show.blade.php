@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notification Details</h1>
    <p><strong>Employee:</strong> {{ $notification->employee ? $notification->employee->first_name . ' ' . $notification->employee->last_name : 'N/A' }}</p>
    <p><strong>Type:</strong> {{ $notification->type }}</p>
    <p><strong>Message:</strong> {{ $notification->message }}</p>
    <p><strong>Read:</strong> {{ $notification->read ? 'Yes' : 'No' }}</p>
    <a href="{{ route('notifications.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection