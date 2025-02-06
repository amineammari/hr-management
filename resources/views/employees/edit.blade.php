@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $employee->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $employee->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $employee->email }}" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $employee->position }}" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" class="form-control" value="{{ $employee->department }}" required>
        </div>
        <div class="form-group">
            <label for="hire_date">Hire Date</label>
            <input type="date" name="hire_date" class="form-control" value="{{ \Carbon\Carbon::parse($employee->hire_date)->format('Y-m-d') }}" required>

        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control">{{ $employee->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
