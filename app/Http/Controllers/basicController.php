<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class basicController extends Controller
{

    public function index(){
    //	return "this is Homepage";
      return view('welcome');

    }

    public function show(Request $request){
     $name = $request->input('name');
     $path = $request->path();
      return (  " inputted name =  $name  and path =  $path  your form is working man and method  adn url");
    }


    public function about(){
      $name = "Animesh karmakar";
      $id = "hickhock";
      $phone = "33354";
      $add = "Chapai-Nawabganj";
     // return view('about')->with('myname',$name);
      return view('about',compact('name','id','phone'))->with('address',$add);

      //NOTE : // READ IT TO FAST LEARN ::    return view('page name ', compact(* which use for sending data to view // view is that where a page will show in web OK!  get it ..  we can also use with like above to send data to view with a sending name , but a single data only can send by *with* syntex using   got it ))
    }

    public function appBlade(){
      return view('app');
    }

    public function contact(){
      return view('contact');
    }

public function upload(){

return view('upload');
   $dayAgo = 6 ;// where here there is your calculation for now How many days
   $daycheck = \Carbon\Carbon::now()->subday($dayAgo);
   return $dayAgo;
}
    public function store(Request $request){
   


               $file = $request->file('file');

        $file = $file->move(public_path().'/images/',$file->getClientOriginalName());
        $file = $request->file('file')->getClientOriginalName();
        return view('upload',compact('file'));


         //return $filename;
              $path = public_path('\images');
              $path = $request->file('file')->store($path);
              return $path;

        //$file = $request->file('file')->storeAs('upload',$filename);
        
    }


   
}
