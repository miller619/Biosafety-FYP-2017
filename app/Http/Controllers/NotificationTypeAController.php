<?php

namespace App\Http\Controllers;
use App\NotificationTypeA;
use App\Notification;
use App\Notifications\NewNotificationApplicationSubmitted;
use App\Admin;
use Auth;
use Illuminate\Http\Request;

class NotificationTypeAController extends Controller
{
    public function create(Request $request)
    {
        
        //$notification = $request->only('id');
        /*this loop is because im adding rows dynamically to the table*/
        $count = count($request->input('item_name'));

        for ($i=0; $i<$count; $i++){

            $data  = NotificationTypeA::create([
                'item_name'=>$request->item_name[$i],
                'risk_level'=>$request->risk_level[$i],
                'quantity'=>$request->quantity[$i],
                'volume'=>$request->volume[$i],
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
