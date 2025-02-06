<?php
namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller {
    public function index() {
        return view('salaries.index', ['salaries' => Salary::all()]);
    }
    public function create() {
        $employees = Employee::all();
        return view('salaries.create', compact('employees'));
    }
    public function store(Request $request) {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'base_salary' => 'required|numeric',
            'bonus' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'payment_date' => 'required|date',
        ]);
        Salary::create($request->all());
        return redirect()->route('salaries.index')->with('success', 'Salaire ajouté');
    }
    public function show(Salary $salary) {
        return view('salaries.show', compact('salary'));
    }
    public function edit(Salary $salary) {
        $employees = Employee::all();
        return view('salaries.edit', compact('salary', 'employees'));
    }
    public function update(Request $request, Salary $salary) {
        $request->validate([
            'base_salary' => 'required|numeric',
            'bonus' => 'nullable|numeric',
            'deductions' => 'nullable|numeric',
            'payment_date' => 'required|date',
        ]);
        $salary->update($request->all());
        return redirect()->route('salaries.index')->with('success', 'Salaire mis à jour');
    }
    public function destroy(Salary $salary) {
        $salary->delete();
        return redirect()->route('salaries.index')->with('success', 'Salaire supprimé');
    }
}

