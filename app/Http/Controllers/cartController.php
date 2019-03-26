<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\jeanserProduct;
use session;

class cartController extends Controller
{
    public function cart(Request $request, $id){
    	$product = jeanserProduct::where('id', '=', $id)->get();
    	
    	$request->session()->push('product',$product);
    	//dd($product);
    	return view('jeanser.shopping-cart',compact('product'));
    }

    public function shoppingCart(Request $request){

       	$product = $request->session()->get('product');
    	return view('jeanser.shopping-cart',compact('product'));


    }

    public function checkout(Request $request){
        if(!$request->Session()->has('product'))
            return view('jeanser.shopping-cart');
        if(!Auth::user())
            return view('auth.login');
        return view('jeanser.checkout');
    }

    public function loginCheckout(Request $request){

        $url = $request->input('url');
        return redirect($url);
    }

    public function removeFromCart( Request $request, $idToDelete){
       
       $products = session()->pull('product', []); // Second argument is a default value
if(($key = array_search($idToDelete, $products)) !== false) {
    unset($products[$key]);
}
session()->put('products', $products);
      return view('jeanser.shopping-cart');
    }
}
