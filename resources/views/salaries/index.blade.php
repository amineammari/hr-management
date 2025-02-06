@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Salaries</h1>
    <a href="{{ route('salaries.create') }}" class="btn btn-primary">Add Salary</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Base Salary</th>
                <th>Bonus</th>
                <th>Deductions</th>
                <th>Payment Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salaries as $salary)
            <tr>
                <td>{{ $salary->id }}</td>
                <td>{{ $salary->employee->first_name }} {{ $salary->employee->last_name }}</td>
                <td>{{ $salary->base_salary }}</td>
                <td>{{ $salary->bonus }}</td>
                <td>{{ $salary->deductions }}</td>
                <td>{{ $salary->payment_date }}</td>
                <td>
                    <a href="{{ route('salaries.show', $salary->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('salaries.edit', $salary->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('salaries.destroy', $salary->id) }}" method="POST" style="display:inline;">
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