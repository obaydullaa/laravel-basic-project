<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Load All Student
     */
    public function index()
    {
        return view('student.index');
    }
    /**
     * Add new Student
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store Student
     */
    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell' => $request->cell,
            'uname' => $request->uname,
        ]);
        return back() ->with('success','Thanks '.$request->name.' for your Registration');
    }

    /**
     * Edit view Student
     */
    public function edit()
    {
        return view('student.edit');
    }
    
    /**
     * Show view Student
     */
    public function show()
    {
        return view('student.show');
    }
}
