<?php

namespace App\Http\Controllers;

use App\EDFormB2;
use Auth;
use Session;


use Illuminate\Http\Request;

class EDFormB2Controller extends Controller
{
    public function create(Request $request, $id)
    {

    	$this->validate($request, array(
                'name' 					=>   'required|max:255',
                'current_qualification' =>   'required|max:255',
                'department'  			=>   'required|max:255',
                'p_address'  			=>   'required|max:255',
                'tele'  				=>   'required|max:255',
                'fax'  					=>   'required|max:255',
                'email_address'  		=>   'required|max:255'

            ));

    	 $clearence = EDFormB2::create(
    	 	[
    	 		'name'					=>	$request->name,
				'current_qualification'	=>	$request->current_qualification,
				'department'			=>	$request->department,
				'p_address'				=>	$request->p_address,
				'tele'					=>	$request->tele,
				'fax'					=>	$request->fax,
				'email_address'			=>	$request->email_address,

				'ed_form_id'			=>	$id
			]
		);

    	 Session::flash('success', 'Previous Form Was successfully saved Thank you');

    	 // return view('Clearence.EDFormB3')->with('clearence', $clearence);
         return redirect()->route('show.fromB3', $id);
	}

    public function getEDFormB3($id){

        return view('Clearence.EDFormB3')->with('id', $id);

    }
}
