<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormStoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student', [
            'students' => $students,
            'layout' => 'index'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('student', [
            'students' => $students,
            'layout' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormStoreRequest $request)
    {
        Student::create(['cne' => $request->cne, 'first_name' => $request->first_name, 'second_name' => $request->second_name, 'age' => $request->age, 'speciality' => $request->speciality]);

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $students = Student::all();
        return view('student', [
            'students' => $students,
            'student' => $student,
            'layout' => 'show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $students = Student::all();
        return view('student', [
            'students' => $students,
            'student' => $student,
            'layout' => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update(['cne' => $request->cne, 'first_name' => $request->first_name, 'second_name' => $request->second_name, 'age' => $request->age, 'speciality' => $request->speciality]);

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/student');
    }
}
