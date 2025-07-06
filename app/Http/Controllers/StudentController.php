<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    // Show students list
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    // Show particular student data
    public function view($id)
    {
        $student = Student::findOrFail($id);
        return view('student.view', compact('student'));
    }

    // Store student data
    public function store(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            // 'city' => 'required|string|max:255',
        ]);

        // throwing error if validation fails
        if ($validated->fails()) {
            return back()->withErrors($validated)->withInput();
        }

        // storing user data
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->city = $request->city;
        $student->save();

        // throwing error if data not stored
        if (!$student) {
            return back()->with('error', 'Something went wrong while adding.');
        }

        return redirect()->route('student.index')->with('success', 'Student Added Successful');
    }

    // Show edit student page with prefilled student data
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        if (!$student) {
            return back()->with('error', 'Something went wrong');
        }

        return view('student.edit', compact('student'));
    }

    // update student data
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        if (!$student) {
            return back()->with('error', 'Student Not Found');
        }

        $validated = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        // throwing error if validation fails
        if ($validated->fails()) {
            return back()->withErrors($validated)->withInput();
        }

        // storing user data
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->city = $request->city;
        $student->save();

        // throwing error if data not stored
        if (!$student) {
            return back()->with('error', 'Something went wrong while updating.');
        }

        return redirect()->route('student.index')->with('success', 'Student Updated Successful');
    }

    // delete student data
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        if (!$student) {
            return back()->with('error', 'Student Not Found');
        }

        $student->destroy($id);
        return redirect()->route('student.index')->with('success', 'Student Updated Successful');
    }
}
