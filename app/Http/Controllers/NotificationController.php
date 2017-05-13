<?php

namespace App\Http\Controllers;

use App\Notification;
use App\NotificationTypeA;
use Auth;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function create(Request $request)
    {
        $notification = Notification::create([
            'unit_code'=>$request->unit_code,
            'unit_title'=>$request->unit_title,
            'project_title'=>$request->project_title,
            'project_ref_number'=>$request->project_ref_number,
            'storage_location'=>$request->storage_location,
            'keeper_name'=>$request->keeper_name,
            'user_id'=>Auth::user()->id
            ]);
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
