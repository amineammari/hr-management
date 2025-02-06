@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Notification</h1>
    <form action="{{ route('notifications.update', $notification->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" class="form-control" value="{{ $notification->type }}" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" required>{{ $notification->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection