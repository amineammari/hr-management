@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hire_date">Hire Date</label>
            <input type="date" name="hire_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
