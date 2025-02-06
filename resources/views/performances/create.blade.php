@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Performance Evaluation</h1>
    <form action="{{ route('performances.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee_id">Employee</label>
            <select name="employee_id" class="form-control" required>
                @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" name="score" class="form-control" min="1" max="10" required>
        </div>
        <div class="form-group">
            <label for="evaluation_date">Evaluation Date</label>
            <input type="date" name="evaluation_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection