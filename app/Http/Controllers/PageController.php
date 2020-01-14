<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home($value='') { //route ထဲကို သွားမယ့် method
    	return view('index');
    }
    public function about($value='') {
    	return view('about');
    }
    public function contact($value='') {
    	return view('contact');
    }
     
    public function post($value='') {
    	return view('post');
    }
    

    
    public function getData(Request $request) {
    	dd($request);
    }
    public function dashboard($value='') {
        return view('dashboard');
    }
    
}
