<?php

namespace App\Http\Controllers;

use App\EDFormB4;
use App\EDForm1;
use App\EDFormB2;
use App\EDFormB3;
use App\EDFormB3_2;
use App\Notifications\ClearanceExemptDealingSubmit;
use App\Admin;
use Session;
use App\User;


use Auth;


use Illuminate\Http\Request;

class EDFormB4Controller extends Controller
{
     public function create(Request $request)
    {
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
         Session::flash('success', 'Previous Form Was successfully saved Thank you');

        $admin = Admin::find(1);
        $user = Auth::user();
        $sendEmail = EDForm1::find($request->ed_form_id);
        $admin->notify(new ClearanceExemptDealingSubmit($user->name, $sendEmail->id));
         
         return redirect('/home/edcontent');
    	 
	}

	public function index()
    {
        return view('subViews.edcontent');
    }

    public function getuserdetails()
    {
        return view('Clearence.EDFormB4');
    }
}
