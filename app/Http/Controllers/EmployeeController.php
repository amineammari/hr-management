<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {
    public function index() {
        return view('employees.index', ['employees' => Employee::all()]);
    }
    public function create() {
        return view('employees.create');
    }
    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:employees',
        ]);
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employé ajouté');
    }
    public function show(Employee $employee) {
        return view('employees.show', compact('employee'));
    }
    public function edit(Employee $employee) {
        return view('employees.edit', compact('employee'));
    }
    public function update(Request $request, Employee $employee) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
        ]);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Employé mis à jour');
    }
    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employé supprimé');
    }
}