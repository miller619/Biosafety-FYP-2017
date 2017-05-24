<?php

namespace App\Http\Controllers;
use App\NotificationTypeA;
use App\Notification;
use App\Notifications\NewNotificationApplicationSubmitted;
use App\Admin;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
use Session;
use Illuminate\Http\Request;

class NotificationTypeAController extends Controller
{
    public function create(Request $request)
    {
        /*this loop is because im adding rows dynamically to the table*/
        

        $validator = Validator::make($request->all(), [
            'material_type.*' => 'required|max:25',
            'item_name.*' => 'required|max:255',
            'risk_level.*' => 'required|max:255',
            'quantity.*' => 'required|max:255',
            'volume.*' => 'required|max:255',
            'notification_id' => 'required|max:255',
        ]);      
        

        if ($validator->fails()) {
            return view('Notification.notification_for_lmo')->withErrors($validator)->withInput()->with('notification_id', $request->notification_id);
        }

        
        $count = count($request->input('item_name'));
        for ($i=0; $i<$count; $i++){
        
            $data  = NotificationTypeA::create([
                'material_type'  =>$request->material_type[$i],
                'item_name'      =>$request->item_name[$i],
                'risk_level'     =>$request->risk_level[$i],
                'quantity'       =>$request->quantity[$i],
                'volume'         =>$request->volume[$i],
                'notification_id'=>$request->notification_id
            ]);
        }

            $admin = Admin::find(1);
            $user = Auth::user();
            $notification = Notification::find($request->notification_id);
            $admin->notify(new NewNotificationApplicationSubmitted($user->name, $notification->id));

            return redirect()->route('show.go_to_notification')->with('message', 'We have notified '.$user->name.' that he/she is added to SSBC')->with('status', 'info');

        }
}
