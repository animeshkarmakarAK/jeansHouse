<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use Session;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function index(){
    	if (Auth::user()) {
    		return view('jeanser.reviewProduct');
    	}
    	else{
    		
    		 //return '<script type="text/javascript">alert("Login first to write review");</script>';

    		//return Redirect::back()->withErrors(['msg', 'The Message']);

    		//return redirect()->back()->withErrors([''])

    		Session::flash('message', "Login first to write Review and Rating");
              return Redirect::back();
    	}
    	
    }
}
