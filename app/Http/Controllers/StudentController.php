<?php

namespace App\Http\Controllers;

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
    public function store()
    {
       echo "I Am Here";
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
