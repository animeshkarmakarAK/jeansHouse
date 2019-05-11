<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function login(){
    	return view('admin.login');
    }

     public function register(){
    	return view('admin.register');
    }

    public function forgotPassword(){
    	return view('admin.forgot-password');
    }

     public function charts(){
    	return view('admin.charts');
    }


     public function blank(){
    	return view('admin.blank');
    }

        public function fourzerofour(){
    	return view('admin.404');
 }  

     public function customproduct(){
    	return view('admin.customizeProduct');
    }
 

    
}
