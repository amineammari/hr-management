@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Performance Evaluation</h1>
    <form action="{{ route('performances.update', $performanceEvaluation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" name="score" class="form-control" min="1" max="10" value="{{ $performanceEvaluation->score }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection