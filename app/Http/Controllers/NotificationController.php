<?php
namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Employee;
use Illuminate\Http\Request;

class NotificationController extends Controller {
    public function index() {
        return view('notifications.index', ['notifications' => Notification::all()]);
    }
    public function create() {
        $employees = Employee::all();
        return view('notifications.create', compact('employees'));
    }
    public function store(Request $request) {
        $request->validate([
            'employee_id' => 'nullable|exists:employees,id',
            'type' => 'required',
            'message' => 'required',
        ]);
        Notification::create($request->all());
        return redirect()->route('notifications.index')->with('success', 'Notification envoyée');
    }
    public function show(Notification $notification) {
        return view('notifications.show', compact('notification'));
    }
    public function edit(Notification $notification) {
        $employees = Employee::all();
        return view('notifications.edit', compact('notification', 'employees'));
    }
    public function update(Request $request, Notification $notification) {
        $request->validate([
            'type' => 'required',
            'message' => 'required',
        ]);
        $notification->update($request->all());
        return redirect()->route('notifications.index')->with('success', 'Notification mise à jour');
    }
    public function destroy(Notification $notification) {
        $notification->delete();
        return redirect()->route('notifications.index')->with('success', 'Notification supprimée');
    }
}

