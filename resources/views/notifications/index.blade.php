@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notifications</h1>
    <a href="{{ route('notifications.create') }}" class="btn btn-primary">Add Notification</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Type</th>
                <th>Message</th>
                <th>Read</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notifications as $notification)
            <tr>
                <td>{{ $notification->id }}</td>
                <td>{{ $notification->employee ? $notification->employee->first_name . ' ' . $notification->employee->last_name : 'N/A' }}</td>
                <td>{{ $notification->type }}</td>
                <td>{{ $notification->message }}</td>
                <td>{{ $notification->read ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('notifications.show', $notification->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('notifications.edit', $notification->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display:inline;">
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