<?php

namespace App\Http\Controllers;

use App\EDFormB4;
use App\EDForm1;
use App\EDFormB2;
use App\EDFormB3;
use App\EDFormB3_2;


use App\User;


use Auth;
use Session;

use Illuminate\Http\Request;

class EDFormB4Controller extends Controller
{
     public function create(Request $request)
    {

        // $this->validate($request, array(
        //         'one'   =>   'required|max:255',
        //         'two'   =>   'required|max:255',
        //         'three' =>   'required|max:255',
        //         'four'  =>   'required|max:255',
        //         'five'  =>   'required|max:255'
        //     ));

    	 $clearence = EDFormB4::create(
    	 	[
    	 		'one' 	=> $request->one,
				'two'	=> $request->two,
				'three'	=> $request->three,
				'four'	=> $request->four,
				'five'	=> $request->five,

				'ed_form_id'    =>	$request->ed_form_id
			]
		);
    	//dd($clearence);
         //Session::flash('success', 'Previous Form Was successfully saved Thank you');
         
         return redirect('/home/edcontent');
    	 
	}

	public function index()
    {
        
        
        
        return view('subViews.edcontent');
    }

    public function getuserdetails()
    {
        // $userdetails = [];
        // $userdetails['userdetails'] = EDForm1::where(['user_id'=>$user_id])->where(['id'=>$clearence_id])->get();

        // $edform1 = [];
        // $edform1['edform1'] = EDForm1::with('e_d_form1s')->where(['edform1s'=>$edform1s])->get();

        // return view('Clearence.show', $userdetails, $edform1);

        // $userdetails=EDForm1::all();
        // return view('Clearence.show')->with('userdetails', $userdetails);
         return view('Clearence.EDFormB4');

    }
}
