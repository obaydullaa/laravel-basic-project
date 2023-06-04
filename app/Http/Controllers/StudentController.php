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
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'unique:students', 'email'],
            'cell' => ['required', 'numeric', 'digits_between:11,13', 'regex:/^(01|\+?8801)[1-9]\d{8}$/'],
            'uname' => ['min:5', 'max:10']
        ],[
            'name.required' => 'নামের ঘরটি ঘালি রাখা যাবে না',
            'cell.numeric' => 'সঠিক নাম্বার বসান',
        ]);
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
    public function edit($id)
    {
        $data = student::find($id);
        return view('student.edit', [
            'edit_data' => $data
        ]);
    }

    /**
     * Updated Student
     */
    public function update(Request $request, $id)
    {
        $update_data = student::find($id);
        $update_data -> name = $request -> name;
        $update_data -> email = $request -> email;
        $update_data -> cell = $request -> cell;
        $update_data -> uname = $request -> uname;

        $update_data-> update();
        
        return back() -> with('success', 'Student Data Delete.');
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
