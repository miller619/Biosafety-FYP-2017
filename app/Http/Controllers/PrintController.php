<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;

use Barryvdh\DomPDF\Facade as PDF;



class PrintController extends Controller
{
    public function EDformA()
		{
			$pdf = PDF::loadView('ApplicationForms.EDFormA');
			return $pdf->download('/home/madhawa/Desktop/with user details/Biosafety-FYP-2017/media/EDformA.pdf');	
		}

	public function EDformB()
		{
			$pdf = PDF::loadView('ApplicationForms.EDformB');
			return $pdf->download('EDformB.pdf');
				
		}

	public function EDformC()
		{
			$pdf = PDF::loadView('ApplicationForms.EDformB');
			return $pdf->download('EDformB.pdf');
				
		}
}
