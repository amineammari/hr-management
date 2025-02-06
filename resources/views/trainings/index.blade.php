@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Trainings</h1>
    <a href="{{ route('trainings.create') }}" class="btn btn-primary">Add Training</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainings as $training)
            <tr>
                <td>{{ $training->title }}</td>
                <td>{{ $training->description }}</td>
                <td>{{ \Carbon\Carbon::parse($training->start_date)->format('Y-m-d') }}</td>
                <td>{{ \Carbon\Carbon::parse($training->end_date)->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('trainings.show', $training->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('trainings.edit', $training->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('trainings.destroy', $training->id) }}" method="POST" style="display:inline;">
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
