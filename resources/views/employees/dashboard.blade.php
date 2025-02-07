@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee Dashboard</h1>
    <h2>Leave History</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Leave Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leaveHistory as $leave)
                <tr>
                    <td>{{ $leave->leave_type }}</td>
                    <td>{{ $leave->start_date }}</td>
                    <td>{{ $leave->end_date }}</td>
                    <td>{{ $leave->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Salary</h2>
    <p>Base Salary: {{ $salary->base_salary }}</p>
    <p>Bonus: {{ $salary->bonus }}</p>
    <p>Deductions: {{ $salary->deductions }}</p>
    <p>Payment Date: {{ $salary->payment_date }}</p>

    <h2>Performance Evaluations</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Score</th>
                <th>Comments</th>
                <th>Evaluation Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($performanceEvaluations as $evaluation)
                <tr>
                    <td>{{ $evaluation->score }}</td>
                    <td>{{ $evaluation->comments }}</td>
                    <td>{{ $evaluation->evaluation_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Training Progress</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainingProgress as $training)
                <tr>
                    <td>{{ $training->title }}</td>
                    <td>{{ $training->description }}</td>
                    <td>{{ $training->start_date }}</td>
                    <td>{{ $training->end_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
