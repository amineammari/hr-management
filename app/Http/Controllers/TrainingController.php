<?php
namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller {
    public function index() {
        return view('trainings.index', ['trainings' => Training::all()]);
    }
    public function create() {
        return view('trainings.create');
    }
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        Training::create($request->all());
        return redirect()->route('trainings.index')->with('success', 'Formation ajoutée');
    }
    public function show(Training $training) {
        return view('trainings.show', compact('training'));
    }
    public function edit(Training $training) {
        return view('trainings.edit', compact('training'));
    }
    public function update(Request $request, Training $training) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $training->update($request->all());
        return redirect()->route('trainings.index')->with('success', 'Formation mise à jour');
    }
    public function destroy(Training $training) {
        $training->delete();
        return redirect()->route('trainings.index')->with('success', 'Formation supprimée');
    }
}
