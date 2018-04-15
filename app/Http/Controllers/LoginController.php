<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
    	//return 2;
    	return view('pages.index');
    }
    public function authenticate(Request $request){
    	$email=$request->get('email');
    	$password=$request->get('password');
    	$errors=array(); 
    	if (empty($email)) { $errors[] = "Email is required"; }
    	if (empty($password)) { $errors[] = "Password is required"; } 
    	 if(count($errors) > 0){ return redirect()->back()->withErrors($errors)->with('errorArray', 'Array Error Occured');
   }else{
  	if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'),'status' => 'Active'])) { 
  		return view('pages.dashboard');
  		 }else{ 
  		 $errors[] = "Invalid user email or password "; 
  		 return redirect()->back()->withErrors($errors)->with('errorArray', 'Array Error Occured'); }
    	}

    	 
    }
}
