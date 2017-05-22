<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Notifications\NewNotificationApplicationSubmitted;
use App\Notifications\NotificationApplicationStatus;
use Auth;
use App\User;
use App\Notification;
use App\NotificationTypeA;
use App\Admin;

class AdminController extends Controller
    {
        /**
        * Create a new controller instance.
        *
        * @return void
        */
        public function __construct()
        {
            $this->middleware('auth:admin');
        }
        /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            return view('pages.admin');
        }

        public function create(Request $request){

        }

        public function show($id){
            $admin = Admin::find($id);
            //dd($admin);
            return view('admin.admin_profile', compact('admin'));
        }

        public function getuserList() 
        {
            $users = User::all();
            return view('pages.userList', ['users' => $users]);
        }

        public function destroy($id) {
            
        }

        public function adminNotificationList(){
                
                $admin = [];
                $admin['admins']= Admin::where('id', Auth::user()->id)->get();

                $data = [];
                $data['notifications'] = Notification::where(['approved'=>0])->get();

                $approvedData = [];
                $approvedData['approvednotifications'] = Notification::where(['approved'=>2])->get();

                $sendData = [];
                $sendData['sendnotifications'] = Notification::where(['approved'=>1])->get();

                $declined = [];
                $declined['declinedData'] = Notification::where(['approved'=> 5])->get();
                    
                //dd($admin);
                return view('Notification.notification_admin', compact('admin', 'data', 'approvedData', 'sendData', 'declined'));
            
        }

        
        public function adminGetEachNotification($user_id, $notification_id){

            $userdetails = [];
            $userdetails['userdetails'] = Notification::where(['user_id'=>$user_id])->where(['id'=>$notification_id])->get();


            $dataList = [];
            $dataList['notify'] = NotificationTypeA::with('notification')->where(['notification_id'=>$notification_id])->get();
            return view('Notification.admin_notification_application', $userdetails, $dataList);
        }


        public function approveNotification(Request $request, $user_id, $id){
            
            $notification = Notification::find($id);
            $notification->approved = $request->get('type');
            $notification->save();


            $admin = Admin::where(['adminRole' => 2])->get();
            

            $user = User::find($user_id);
            $status = $notification->approved;
            if ($status == 2)
            {
                $string = 'Approved';
                $user->notify(new NotificationApplicationStatus($user->name, $notification->id, $string));
                return redirect()->route('admin.notification_list');
            }else if($status == 5){
                $string = 'Rejected';
                $user->notify(new NotificationApplicationStatus($user->name, $notification->id, $string));
                return redirect()->route('admin.notification_list');
            }else if ($status == 1){
                $string = 'Sent To SSBC Board Members For Approval';

                $user->notify(new NotificationApplicationStatus($user->name, $notification->id, $string));
                return redirect()->route('admin.notification_list'); 
            }

             
    }
}