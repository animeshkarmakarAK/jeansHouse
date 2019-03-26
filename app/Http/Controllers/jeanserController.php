<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\jeanserProduct;
use App\adminRegister;
use Illuminate\Support\Facades\DB;

class jeanserController extends Controller
{
     public function jeanserHome(){
      return view('jeanser.home');
    }

      public function addProduct(){
      return view('jeanser.add_product');
    }

       public function addedProduct( Request $req){
         $filename = '';
         $name = $req->input('jeans-name');
         $category = $req->input('jeans-category');
         $size = $req->input('jeans-size');
         $price = $req->input('jeans-price');
         $color = $req->input('jeans-color');
         $des = $req->input('jeans-description');

         if($req->hasfile('jeans-pic')){
             $file = $req->file('jeans-pic');

        $file = $file->move(public_path().'/productImage/',$file->getClientOriginalName());
        $filename = $req->file('jeans-pic')->getClientOriginalName();
        

       }
      //  return $filename;
         //$filename = time().'.'.$file->getClientOriginalName();

       // $path = $req->file('jeans-pic')->storeAs("/images", $filename);
        // $file = $req->store('/upload');
     

       $product = array('name' =>$name ,'category' => $category, 'size' => $size, 'price' => $price, 'color' => $color ,'description' => $des, 'image' => $filename, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString());

       jeanserProduct::insert($product);

       //store the pic in upload folder 
       //$file = $req->file('jeans-pic')->store('/upload'); 

       return view('jeanser.add_product');
    }

    public function mens_product(){
      return view('jeanser.mens-product');
    }

     public function get_data(){
      $data['data'] =jeanserProduct::get();
      if (count($data)>0) {
        # code...
      
      return view('jeanser.mens-product', compact($data));
    }
    }

    public function mensProduct(){
          $pant = jeanserProduct::where('category','=','men')->get();
          return view('jeanser.mens-product',['pant' => $pant]);
    }

      public function womensProduct(){
          $pant = jeanserProduct::where('category','=','women')->get();
          return view('jeanser.womens-product',['pant' => $pant]);
    }

      public function boysProduct(){
          $pant = jeanserProduct::where('category','=','boy')->get();
          return view('jeanser.boys-product',['pant' => $pant]);
    }

      public function girlsProduct(){
          $pant = jeanserProduct::where('category','=','girl')->get();
          return view('jeanser.girls-product',['pant' => $pant]);
    }

      public function babiesProduct(){
          $pant = jeanserProduct::where('category','=','baby')->get();
          return view('jeanser.babies-product',['pant' => $pant]);
    }

    public function adminHome(){
      return view('jeanser.adminHome');
    }

    public function adminLogin(){
      return view('jeanser.adminLogin');
    }


       public function productDetail($product_id){
       $pant = jeanserProduct::where('id' , '=',$product_id)->get();
      return view('jeanser.productDetail',compact('pant'));      
       }


       public function LoadMore(){
        $product = jeanserProduct::orderBy('id','desc')->limit(3)->get();
        return view('jeanser.home',compact('product'));
       }

       public function LoadMore_again($product_id){

        $product = jeanserProduct::where('id' , '<', $product_id)->limit(3)->get();

        return view('jeanser.home',compact('product'));
       }

       public function adminRegister(){
        $registerBtn = 1;
        return view('jeanser.adminLogin',compact('registerBtn'));
       }

        public function adminRegistering(request $request){
            
            $firstname = $request->input('firstName');
            $lastname = $request->input('lastName');
            $email = $request->input('email');
            $password = $request->input('password');

 $registerContent = array('firstname' =>$firstname ,'lastname' => $lastname, 'email' => $email, 'password' => $password, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString());

 adminRegister::insert($registerContent);
 $registerBtn = 1;

        return view('jeanser.adminLogin',compact('registerBtn'));
       }


       public function adminLogging(request $request){
         $email = $request->input('email');
         $password = $request->input('password');
         
        $adminEmail = adminRegister::where('email' , '===' , $email)->get();
        $pass = adminRegister::where('password','===',$password);

         /*$mail = adminRegister::find($email);
         $pass = adminRegister::find($password);

         if($mail == $email){
          if($password == $pass){
            return view('jeanser.adminHome');
          }else
          {
            return '<script type = "javascript/text"> alert("wrong content")</script>';
          }
         }*/

        if (($pass) &&($adminEmail)) {
          return view('jeanser.adminHome');
        }

       }

       public function customizeProduct(){
        return view('jeanser.customizeProduct');
       }
       public function customProduct(request $request){
        if(isset($category)){

        }else{
          $pant = jeanserProduct::get();
          return view('jeanser.customizeProduct',compact($pant));//not completed
        }
       }

}
