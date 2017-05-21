<?php

namespace App\Http\Controllers;

use App\EDFormB2;
use Auth;


use Illuminate\Http\Request;

class EDFormB2Controller extends Controller
{
    public function create(Request $request)
    {

    	

    	 $clearence = EDFormB2::create(
    	 	[
    	 		'name'					=>	$request->name,
				'current_qualification'	=>	$request->current_qualification,
				'department'			=>	$request->department,
				'p_address'				=>	$request->p_address,
				'tele'					=>	$request->tele,
				'fax'					=>	$request->fax,
				'email_address'			=>	$request->email_address,

				'ed_form_id'			=>	$request->ed_form_id
			]
		);

    	 //Session::flash('success', 'Previous Form Was successfully saved Thank you');

    	 return view('Clearence.EDFormB3')->with('clearence', $clearence);
	}
}
