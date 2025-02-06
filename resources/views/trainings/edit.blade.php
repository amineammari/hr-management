@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Training</h1>
    <form action="{{ route('trainings.update', $training->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $training->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $training->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ \Carbon\Carbon::parse($training->start_date)->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ \Carbon\Carbon::parse($training->end_date)->format('Y-m-d') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
