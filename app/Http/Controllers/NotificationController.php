<?php

namespace App\Http\Controllers;

use App\Notification;
use App\NotificationTypeA;
use Auth;
use Session;
use Validator;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'unit_code' => 'max:25',
            'unit_title' => 'max:255',
            'project_title' => 'max:255',
            'project_ref_number' => 'max:255',
            'storage_location' => 'required|max:255',
            'keeper_name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
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
        
        return view('Notification.notification_for_lmo')->with('notification_id', $notification->id);
        //return redirect()->route('show.material_List')->with('notification'); 

    }

    public function getNotificationApplication($user_id, $notification_id){
        
        $userdetails = [];
        $userdetails['userdetails'] = Notification::where(['user_id'=>$user_id])->where(['id'=>$notification_id])->get();


        $dataList = [];
        $dataList['notify'] = NotificationTypeA::with('notification')->where(['notification_id'=>$notification_id])->get();
       
        return view('Notification.notification_application', $userdetails, $dataList);
    }


}
