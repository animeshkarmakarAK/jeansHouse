<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\jeanserProduct;
use App\adminRegister;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{
      public function index(){
      	$pant = jeanserProduct::orderBy('id','desc')->get();
    	return view('jeanser.shop',compact('pant'));
    }

    public function view(){
      	$product = jeanserProduct::orderBy('id','desc')->get();
    	return view('admin.view',compact('product'));
    }
}
