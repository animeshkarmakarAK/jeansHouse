<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class authController extends Controller
{

public function login(){
return view('auth.login');
}

public function register(){
return view('auth.register');
}

}
