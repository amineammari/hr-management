<?php
namespace App\Http\Controllers;

use App\Models\PerformanceEvaluation;
use App\Models\Employee;
use Illuminate\Http\Request;

class PerformanceEvaluationController extends Controller {
    public function index() {
        return view('performances.index', ['evaluations' => PerformanceEvaluation::all() , 'employees' => Employee::all()]);
    }
    public function create() {
        $employees = Employee::all();
        return view('performances.create', compact('employees'));
    }
    public function store(Request $request) {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'score' => 'required|integer|min:1|max:10',
            'evaluation_date' => 'required|date',
        ]);
        PerformanceEvaluation::create($request->all());
        return redirect()->route('performances.index')->with('success', 'Évaluation ajoutée');
    }
    public function show(PerformanceEvaluation $performanceEvaluation, $id) {
        $employees = Employee::all();
        $performanceEvaluation = PerformanceEvaluation::with('employee')->findOrFail($id);
        return view('performances.show', compact('performanceEvaluation', 'employees'));
    }
    public function edit(PerformanceEvaluation $performanceEvaluation, $id) {
        $employees = Employee::all();
        $performanceEvaluation = PerformanceEvaluation::findOrFail($id);
        return view('performances.edit', compact('performanceEvaluation', 'employees'));
    }
    public function update(Request $request, PerformanceEvaluation $performanceEvaluation , $id) {
        $request->validate([
            'score' => 'required|integer|min:1|max:10',
        ]);
        $performanceEvaluation = PerformanceEvaluation::findOrFail($id);
        $performanceEvaluation->update($request->all());

        return redirect()->route('performances.index')->with('success', 'Évaluation mise à jour');
    }
    public function destroy(PerformanceEvaluation $performanceEvaluation, $id) {
        $performanceEvaluation = PerformanceEvaluation::findOrFail($id);
        $performanceEvaluation->delete();
        return redirect()->route('performances.index')->with('success', 'Évaluation supprimée');
    }
}
