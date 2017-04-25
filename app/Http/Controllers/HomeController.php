<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getEDContent()
    {
        return view('edcontent');
    }

    public function getEDFormA()
    {
        return view('ApplicationForms.EDFormA');
    }
    public function getEDFormB()
    {
        return view('ApplicationForms.EDFormB');
    }
    public function getEDFormC()
    {
        return view('ApplicationForms.EDFormC');
    }
}
