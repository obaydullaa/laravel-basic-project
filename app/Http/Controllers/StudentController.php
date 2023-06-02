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
        $data = student::all();
        return view('student.index', [
            'all_data'  => $data,
        ]);
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
        $unique_name = '';
        if($request->hasFile('photo')){
            $img = $request -> file('photo');
            $unique_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();
            $img -> move(public_path('media/students'), $unique_name) ;
        }
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell' => $request->cell,
            'uname' => $request->uname,
            'photo' => $unique_name,
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
     * Show single user
     */
    public function show($id)
    {
        $data = student::find($id);

        return view('student.show' , [
            'user_data' => $data,
        ]);
    }
    /**
     * Delete user
     */
    public function destroy($id)
    {
        $delete_data = student::find($id);
        $delete_data -> delete();
        return back() -> with('success', 'Student Data Delete.');
    }
}
