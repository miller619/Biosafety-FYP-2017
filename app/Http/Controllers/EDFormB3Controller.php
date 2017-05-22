<?php

namespace App\Http\Controllers;

use App\EDFormB3;
use Auth;
use Illuminate\Http\Request;
use Session;

class EDFormB3Controller extends Controller
{
    public function create(Request $request, $id)
    {

    	$this->validate($request, array(
                'name' 					=>   'required|max:255',
                'current_qualification'	=>   'required|max:255',
                'department'  			=>   'required|max:255',
                'p_address'  			=>   'required|max:255',
                'tele'  				=>   'required|max:255',
                'fax'  					=>   'required|max:255',
                'email_address'  		=>   'required|max:255'
            ));

    	 $clearence = EDFormB3::create(
    	 	[
    	 		'name'						=>	$request->name,
				'current_qualification'		=>	$request->current_qualification,
				'department'				=>	$request->department,
				'p_address'					=>	$request->p_address,
				'tele'						=>	$request->tele,
				'fax'						=>	$request->fax,
				'email_address'				=>	$request->email_address,

				'ed_form_id'				=>	$id
			]
		);


    	 Session::flash('success', 'Form Successfully saved. Please Continue');

         return redirect()->route('show.fromB3_2', $id);

    	
	}

    public function getEDFormB3_2($id)
    {
        return view('Clearence.EDFormB3_2')->with('id', $id);
    }
}

    

