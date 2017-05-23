<?php

namespace App\Http\Controllers;

use App\Notification;
use App\NotificationTypeA;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function create(Request $request)
    {
        
        $v = Validator::make($request->all(), [
            'unit_code' => 'max:15',
            'unit_title' => 'max:255',
            'project_title' => 'max:255',
            'project_ref_number' => 'max:40',
            'keeper_name'=>'required|max:255',
            'storage_location'=>'required|max:255',
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $notification = Notification::create([
            'unit_code'         =>$request->unit_code,
            'unit_title'        =>$request->unit_title,
            'project_title'     =>$request->project_title,
            'project_ref_number'=>$request->project_ref_number,
            'storage_location'  =>$request->storage_location,
            'keeper_name'       =>$request->keeper_name,
            'user_id'           =>Auth::user()->id
            ]);

        //Session::flash('success', 'Previous Form Was successfully saved Thank you');

        //return redirect()->route('show.material_list_for_notification')->with('notification', $notification);
        return view('Notification.notification_for_lmo')->with('notification', $notification);
    }

    


    public function getNotificationApplication($user_id, $notification_id){
        
        $userdetails = [];
        $userdetails['userdetails'] = Notification::where(['user_id'=>$user_id])->where(['id'=>$notification_id])->get();


        $dataList = [];
        $dataList['notify'] = NotificationTypeA::with('notification')->where(['notification_id'=>$notification_id])->get();
       
        return view('Notification.notification_application', $userdetails, $dataList);
    }


}
