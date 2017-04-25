<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \DB::select('select * from users where loginapproval = :loginapproval', ['loginapproval'=> false]);

        $usersApproved = \DB::select('select * from users where loginapproval = :loginapproval', ['loginapproval'=> true]);
        
        return view('pages.admin', ['users' => $users], ['usersApproved'=>$usersApproved]);
        
    }

    public function userDetails(){
        
    }
}
