<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Teacher;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $feedbacks = Feedback::All();
          $teachers=Teacher::All();
          return view('index',compact('feedbacks','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $feedbacks = Feedback::All();
        return view ('feedbacks.create',compact('feedbacks'));
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
            'name'=>'required',
           
            'guardian'=>'required',
              'message'=>'required',
              'profile'=>'required',
               
                 
        ]);
        if($request->hasFile('profile'))
        {
            $photo =$request->file('profile');
            $filename=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);
      
            $profile='/storage/profile/'.$filename;
          }
          else{
            $profile='';
          }
        $feedbacks=new Feedback;
         
    
        
         $feedbacks->name=request('name');   
         $feedbacks->guardian=request('guardian');

         $feedbacks->message=request('message');
         $feedbacks->profile=$profile;
         $feedbacks->save();


//return
    return redirect()->route('feedbacks.index');
   } /**
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view ('feedbacks.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $feedback=Feedback::find($id);
        
        return view ('feedbacks.edit',compact('feedback'));//
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
            'name'=>'required',
           
            'guardian'=>'required',
              'message'=>'required',
              'profile'=>'required',
               
                 
        ]);
       if($request->hasFile('profile'))
        {
            $photo =$request->file('profile');
            $filename=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/profile/',$filename);
      
            $profile='/storage/profile/'.$filename;
          }
          else
          {
            $profile=request('oldprofile');
          }
        $feedbacks=new Feedback;
         
    
        
         $feedbacks->name=request('name');   
         $feedbacks->guardian=request('guardian');

         $feedbacks->message=request('message');
          $feedbacks->profile=$profile;
         $feedbacks->save();


//return
    return redirect()->route('feedbacks.index');
   } /**
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $feedback=Feedback::find($id);
        $feedback ->delete();
        return redirect()->route('feedbacks.index');
    }
}
