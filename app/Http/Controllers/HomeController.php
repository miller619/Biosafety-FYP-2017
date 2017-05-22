<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Notification;
use App\EDForm1;
use App\EDFormB2;
use App\EDFormB3;
use App\EDFormB3_2;
use App\EDFormB4;

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


    public function goToProfile(){
        return view('user.userProfile');
    }

    public function getlmoContent()
    {
        return view('subViews.lmocontent');
    }
    public function getlmoFormA()
    {
        return view('ApplicationForms.annex2');
    }
    public function getlmoFormB()
    {
        return view('ApplicationForms.pc1');
    }
    public function getlmoFormC()
    {
        return view('ApplicationForms.pc2');
    }
    public function getlmoFormD()
    {
        return view('ApplicationForms.hirarc');
    }
    public function getlmoFormE()
    {
        return view('ApplicationForms.ssbc001');
    }
    public function getlmoFormF()
    {
        return view('ApplicationForms.formE');
    }



    public function getEDContent()
    {
        $clearence = [];
        $clearence['clearence'] = EDForm1::where('approved', '=>', 0)->with('user')->where('user_id', Auth::user()->id)->get();


        $approved = [];
        $approved['approved'] = EDForm1::where(['approved' => 2])->with('user')->where('user_id', Auth::user()->id)->get();

        $declined = [];
        $declined['declined'] = EDForm1::where(['approved' => -1])->with('user')->where('user_id', Auth::user()->id)->get();

        $sendData = [];
        $sendData['sendData'] = EDForm1::where(['approved'=>1])->with('user')->get();

        //dd($declined);

        // return response($declined);

        // return view('subViews.edcontent');
        
        return view('subViews.edcontent', compact('clearence', 'approved', 'declined', 'sendData'));
    }

    public function getEDFormA()
    {
        return view('ApplicationForms.hirarc');
    }
    public function getEDFormB()
    {
        return view('Clearence.EDFormB1');
    }
    public function getEDFormC()
    {
        return view('ApplicationForms.ssbc001');
    }


    public function getbmContent()
    {
        return view('subViews.bmcontent');
    }

    public function getbmFormA()
    {
        return view('ApplicationForms.clforbio');
    }
    public function getbmFormB()
    {
        return view('ApplicationForms.hirarc');
    }
    public function getbmFormC()
    {
        return view('ApplicationForms.ssbc001');
    }

    /*PROCUREMENT form unavailable*/
    public function getProcurement(){
        return view('subViews.procurement');
    }
    

    /*show forms list for notification*/
    public function getNotificationPage()
    {
        $data = [];
        $data['notifications'] = Notification::where('approved', '<=', 1)->with('user')->where('user_id', Auth::user()->id)->get();

        $approvedData = [];
        $approvedData['approvednotifications'] = Notification::where(['approved'=>2])->with('user')->where('user_id', Auth::user()->id)->get();

        $declined = [];
        $declined['declinedData'] = Notification::where(['approved'=>5])->with('user')->where('user_id', Auth::user()->id)->get();
        //dd($approvedData);
        return view('subViews.notification', compact('data', 'approvedData', 'declined'));
    }
    /*show the form for notification of living modified organism*/
    public function getNotificationForm(){
        return view('Notification.personal_information_for_notification');
    }
    /*show the form for notification of biohazardous material*/
    public function getlmoNotificationForm(){
        return view('Notification.notification_for_lmo');
    }
    

    public function getExportLmo(){
        return view('subViews.exportlmo');
    }
    public function getExportingLmoForm(){
        return view('ApplicationForms.formF');
    }

    public function getExportEdbm(){
        return view('subViews.exportedbm');
    }

    /*public function getExportingLmoForm(){
        return view('ApplicationForms.formF');
    }*/

    public function getAccidentLmo(){
        return view('subViews.accidentlmo');
    }
    public function getMinorAccidentForm(){
        return view('ApplicationForms.incident');
    }
    public function getmajorAccidentform(){
        return view('ApplicationForms.annex3');
    }
    public function getOHSAccidentForm(){
        return view('ApplicationForms.annex4');
    }

    public function getAccidentMinor(){
        return view ('subViews.accidentminor');
    }

    public function getreportpage(){
        return view('subViews.annualReport');
    }
    public function getreportFormA(){
        return view('ApplicationForms.annualr');
    }
    public function getreportFormB(){
        return view('ApplicationForms.hirarc');
    }
    public function getreportFormC(){
        return view('ApplicationForms.ssbc001');
    }

    public function getResetpassword(){
        return view('user.changePassword');
    }

    

}
