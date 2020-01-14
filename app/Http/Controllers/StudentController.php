<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreRegister;
use App\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $students = Student::All();
        return view('students.index',compact('students','preregisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namem' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'personal_id' => 'required',
        ]);

        $student = new Student;
        $student->namem = request('namem');
        $student->personal_id = request('personal_id');
        $student->grade = request('grade');
        $student->subject = request('subject');
        $student->g1_name = request('g1_name');
        $student->g2_name = request('g2_name');
        
        $student->address = request('address');
       
        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $preregisters = PreRegister::All();
       
        $preregister = PreRegister::find($id);

        return view('students.detail',compact('preregister','preregisters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
