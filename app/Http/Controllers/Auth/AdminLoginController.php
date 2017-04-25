<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	
	public function __construct(){
		$this->middleware('guest:admin');
	}

    public function showLoginForm(){
    	return view ('auth.admin-login');
    }

    public function login(Request $request){

    	//validate the form
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password'=> 'required|min:6'
    	]);
    	
    	//attmpt to log the user in
    	if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=>$request->password], $request->remember)){
    		//redirect to their intended location if successfull
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	//else redirect back to login
    	return redirect()->back()->withInputs($request->only('email', 'remember'));

    }
}
