@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Training Details</h1>
    <p><strong>Title:</strong> {{ $training->title }}</p>
    <p><strong>Description:</strong> {{ $training->description }}</p>
    <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($training->start_date)->format('Y-m-d') }}</p>
    <p><strong>End Date:</strong> {{ \Carbon\Carbon::parse($training->end_date)->format('Y-m-d') }}</p>
    <a href="{{ route('trainings.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
