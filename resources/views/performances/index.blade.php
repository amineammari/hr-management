@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Performance Evaluations</h1>
    <a href="{{ route('performances.create') }}" class="btn btn-primary">Add Evaluation</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Score</th>
                <th>Evaluation Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evaluations as $evaluation)
            <tr>
                <td>{{ $evaluation->id }}</td>
                <td>{{ $evaluation->employee->first_name }} {{ $evaluation->employee->last_name }}</td>
                <td>{{ $evaluation->score }}</td>
                <td>{{ $evaluation->evaluation_date }}</td>
                <td>
                    <a href="{{ route('performances.show', $evaluation->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('performances.edit', $evaluation->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('performances.destroy', $evaluation->id) }}" method="POST" style="display:inline;">
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