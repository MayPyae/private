<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Degree;
use App\Subject;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::All();
        return view('teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::All();
        $degrees = Degree::All();
        $teachers = Teacher::All();
        return view('teachers.create',compact('degrees','subjects'));

 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           // dd($request);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'subject' => 'required',
            'subject' => 'required',
            'degree' => 'required',
            'biography' => 'required',
        ]);

          if($request->hasFile('profile'))
        {
            $photo =$request->file('profile');
            $filename=time().','.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);
      
            $profile='/storage/profile/'.$filename;
          }
        $teacher = new Teacher;
        $teacher->name = request('name');
        $teacher->phone = request('phone');
        $teacher->address = request('address');
        $teacher->subject = request('subject');
        $teacher->degree = request('degree');
        $teacher->biography = request('biography');
        $teacher->profile = $profile;
        $teacher->save();

    

        return redirect()->route('teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('teachers.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subject::all();
        $degrees = Degree::all();
        $teacher = Teacher::find($id);
        return view('teachers.edit',compact('teacher','subjects','degrees'));
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'subject' => 'required',
            'subject' => 'required',
            'degree' => 'required',
            'biography' => 'required',
        ]);

        $teacher = Teacher::find($id);
        $teacher->name = request('name');
        $teacher->address = request('address');
        $teacher->subject = request('subject');
        $teacher->degree = request('degree');
        $teacher->biography = request('biography');
        $teacher->save();

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('teachers.index');
    }
}
