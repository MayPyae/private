<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PreRegister;
class PreRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $preregisters = PreRegister::All();
        return view('preregisters.index',compact('preregisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('preregisters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
       "namem"=>'required',
       "namee"=>'required',
       "nrc_no"=> 'required',
       "dob"=>'required',
       "grade"=>'required',
       "subject"=>'required',
       "g1_name"=>'required',
       "g1_nrc"=> 'required',
       "g2_name"=>'required',
       "g2_nrc"=> 'required',
       "phone"=>'required',
       "address"=>'required',
       "profile"=>'required'
     ],[
      "namem.required" => "Student Name (Myanmar) is Required",
      "namee.required" => "Student Name (English) is Required",
      "nrc_no.required" => "Student NRC is Required",
      "dob.required" => "Student Date of Birth is Required",
      "grade.required" => "Student Grade is Required",
      "subject.required" => "Student Subject is Required",
      "g1_name.required" => "Guardian Name is Required",
      "g1_nrc.required" => "Guardian NRC is Required",
      "g2_name.required" => "Guardian Name is Required",
      "g2_nrc.required" => "Guardian NRC is Required",
      "phone.required" => "Guardian Phone is Required",
      "address.required" => "Address is Required",
      "profile.required" => "Student Profile is Required"
    ]);

      $preregister = new PreRegister;

      // dd($request);
      if($request->hasfile('profile')){
        $photo = $request->file('profile');
        $filename =time() . '.' .$photo->getClientOriginalExtension();
        $photo -> move(public_path().'/storage/profile/' , $filename);
        $profile= '/storage/profile/'.$filename;
      }

       $preregister->personal_id = request('personal_id');
      $preregister->namem = request('namem');
      $preregister->namee = request('namee');
      $preregister->nrc_no = request('nrc_no');
      $preregister->dob = request('dob');
      $preregister->grade = request('grade');
      $preregister->subject = request('subject');
      $preregister->g1_name = request('g1_name');
      $preregister->g1_nrc = request('g1_nrc');
      $preregister->g2_name = request('g2_name');
      $preregister->g2_nrc = request('g2_nrc');
      $preregister->phone = request('phone');
      $preregister->address = request('address');
      $preregister->profile = $profile;

      $preregister->save();


      return redirect()->route('post');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $preregister = PreRegister::find($id);
        return view('preregisters.edit',compact('preregister'));
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
       $validatedData = $request->validate([
       "namem"=>'required',
       "namee"=>'required',
       "nrc_no"=> 'required',
       "dob"=>'required',
       "grade"=>'required',
       "subject"=>'required',
       "g1_name"=>'required',
       "g1_nrc"=> 'required',
       "g2_name"=>'required',
       "g2_nrc"=> 'required',
       "phone"=>'required',
       "address"=>'required',
       "profile"=>'required'
     ],[
      "namem.required" => "Student Name (Myanmar) is Required",
      "namee.required" => "Student Name (English) is Required",
      "nrc_no.required" => "Student NRC is Required",
      "dob.required" => "Student Date of Birth is Required",
      "grade.required" => "Student Grade is Required",
      "subject.required" => "Student Subject is Required",
      "g1_name.required" => "Guardian Name is Required",
      "g1_nrc.required" => "Guardian NRC is Required",
      "g2_name.required" => "Guardian Name is Required",
      "g2_nrc.required" => "Guardian NRC is Required",
      "phone.required" => "Guardian Phone is Required",
      "address.required" => "Address is Required",
      "profile.required" => "Student Profile is Required"
    ]);

      $preregister = new PreRegister;

      // dd($request);
      if($request->hasfile('profile')){
        $photo = $request->file('profile');
        $filename =time() . '.' .$photo->getClientOriginalExtension();
        $photo -> move(public_path().'/storage/profile/' , $filename);
        $profile= '/storage/profile/'.$filename;
      }

      
       $preregister->personal_id = request('personal_id');
      $preregister->namem = request('namem');
      $preregister->namee = request('namee');
      $preregister->nrc_no = request('nrc_no');
      $preregister->dob = request('dob');
      $preregister->grade = request('grade');
      $preregister->subject = request('subject');
      $preregister->g1_name = request('g1_name');
      $preregister->g1_nrc = request('g1_nrc');
      $preregister->g2_name = request('g2_name');
      $preregister->g2_nrc = request('g2_nrc');
      $preregister->phone = request('phone');
      $preregister->address = request('address');
      $preregister->profile = $profile;

      $preregister->save();


      return redirect()->route('preregisters.index');


    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $preregister = PreRegister::find($id);
        $preregister->delete();

        return redirect()->route('preregisters.index');
    }
}
