<?php

namespace App\Http\Controllers;

use App\EDForm1;
use Auth;
use Session;

use Illuminate\Http\Request;

class EDFormB1Controller extends Controller
{

	 public function create(Request $request, $id)
    {

    	$this->validate($request, array(
                'Title' 			=>   'required|max:255',
                'Project_summary'  	=>   'required|max:255',
                'Possible_hazards'  =>   'required|max:255',
                'Building_No'  		=>   'required|max:255',
                'Room_No'  			=>   'required|max:255',
                'Containment_No'  	=>   'required|max:255',
                'Certificate_No'  	=>   'required|max:255',
                'name_of_officer'  	=>   'required|max:255',
                'name_lab_mngr'  	=>   'required|max:255'

            ));

    	 $clearence = EDForm1::create(
    	 	[
				'Title'				=>	$request->Title,
				'Project_summary'	=>	$request->Project_summary,
				'Possible_hazards'	=>	$request->Possible_hazards,
				'Building_No'		=>	$request->Building_No,
				'Room_No'			=>	$request->Room_No,
				'Containment_No'	=>	$request->Containment_No,
				'Certificate_No'	=>	$request->Certificate_No,
				'radio'				=>	$request->Awareness,
				'name_of_officer'	=>	$request->name_of_officer,
				'name_lab_mngr'		=>	$request->name_lab_mngr,
				'user_id'			=>	$id
			]
		);

    	Session::flash('success', 'Previous Form Was successfully saved Thank you');

    	 // dd($clearence);
    	 //return view('Clearence.EDFormB2')->with('clearence', $clearence);
    	

    	
    	return redirect()->route('show.fromB2', $id);
	}

	// public function getClearenceApplication($user_id, $clearence_id){

		
	// }
	public function getEDFormB2($id){		 
		
		return view('Clearence.EDFormB2')->with('id', $id);

	}

	
}
