<?php

namespace App\Http\Controllers;

use App\EDFormB3;
use Auth;
use Illuminate\Http\Request;

class EDFormB3Controller extends Controller
{
    public function create(Request $request)
    {

    	// $this->validate($request, array(
     //            'name' 					=>   'required|max:255',
     //            'current_qualification'	=>   'required|max:255',
     //            'department'  			=>   'required|max:255',
     //            'p_address'  			=>   'required|max:255',
     //            'tele'  				=>   'required|max:255',
     //            'fax'  					=>   'required|max:255',
     //            'email_address'  		=>   'required|max:255'
     //        ));

    	 $clearence = EDFormB3::create(
    	 	[
    	 		'name'						=>	$request->name,
				'current_qualification'		=>	$request->current_qualification,
				'department'				=>	$request->department,
				'p_address'					=>	$request->p_address,
				'tele'						=>	$request->tele,
				'fax'						=>	$request->fax,
				'email_address'				=>	$request->email_address,

				'ed_form_id'				=>	$request->ed_form_id
			]
		);


    	 //Session::flash('success', 'Form Successfully saved. Please Continue');

    	 return view('Clearence.EDFormB3_2')->with('clearence', $clearence);
	}
}
