<?php
namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use App\Models\Employee;

class LeaveRequestController extends Controller {
    public function index() {
        return view('leaves.index', ['leaveRequests' => LeaveRequest::all()]);
    }
    public function create() {
        $employees = Employee::all();
        return view('leaves.create', compact('employees'));
    }
    public function store(Request $request) {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'leave_type' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        $employees = Employee::all();
        LeaveRequest::create($request->all());
        return redirect()->route('leaves.index',compact('employees'))->with('success', 'Demande de congé soumise');
    }
    public function show(LeaveRequest $leaveRequest , $id) {
        $leaveRequest = LeaveRequest::with('employee')->findOrFail($id);
        $employees = Employee::all();
        return view('leaves.show', compact('leaveRequest', 'employees'));
    }
    public function edit(LeaveRequest $leaveRequest, $id) {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $employees = Employee::all();
        return view('leaves.edit', compact('leaveRequest', 'employees'));
    }
    public function update(Request $request, LeaveRequest $leaveRequest , $id) {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->update($request->all());
        $employees = Employee::all();
        return redirect()->route('leaves.index',compact('employees'))->with('success', 'Statut mis à jour');
    }
    public function destroy(LeaveRequest $leaveRequest, $id) {
        $leaveRequest = LeaveRequest::findOrFail($id);
        $leaveRequest->delete();
        return redirect()->route('leaves.index')->with('success', 'Demande supprimée');
    }
}
