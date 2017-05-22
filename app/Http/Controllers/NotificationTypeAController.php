<?php

namespace App\Http\Controllers;
use App\NotificationTypeA;
use App\Notification;
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

             $this->validate($request, array(

                'item_name'=>'required|max:255',
                 'risk_level'=>'required|max:255',
                 'quantity'=>'required|max:255',
                 'volume'=>'required|max:255',
                 'notification_id'=>'required|max:255'
            
             ));

            $data  = NotificationTypeA::create([
                'item_name'      =>$request->item_name[$i],
                'risk_level'     =>$request->risk_level[$i],
                'quantity'       =>$request->quantity[$i],
                'volume'         =>$request->volume[$i],
                'notification_id'=>$request->notification_id
            ]);
        }

        return redirect()->route('show.go_to_notification');
        
        
    }

   
     
}
