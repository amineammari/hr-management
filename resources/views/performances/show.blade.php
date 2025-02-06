@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Performance Evaluation Details</h1>
    <p><strong>Employee:</strong> {{ $performanceEvaluation->employee->first_name }} {{ $performanceEvaluation->employee->last_name }}</p>
    <p><strong>Score:</strong> {{ $performanceEvaluation->score }}</p>
    <p><strong>Evaluation Date:</strong> {{ $performanceEvaluation->evaluation_date }}</p>
    <a href="{{ route('performances.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection