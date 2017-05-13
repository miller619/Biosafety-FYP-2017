<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Notification;
use App\NotificationTypeA;

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
            return view('admin.showAdminProfile', compact('admin'));
        }

        public function getuserList() 
        {
            $users = User::all();
            return view('pages.userList', ['users' => $users]);
        }

        public function destroy($id) {
            
        }

        public function adminNotificationList(){
            
            $data = [];
            $data['notifications'] = Notification::where(['approved'=>0])->get();

            $approvedData = [];
            $approvedData['approvednotifications'] = Notification::where(['approved'=>2])->get();

            $sendData = [];
            $sendData['sendnotifications'] = Notification::where(['approved'=>1])->get();

            return view('Notification.notification_admin', compact('data', 'approvedData', 'sendData'));

        }

        
        public function adminGetEachNotification($user_id, $notification_id){
            $userdetails = [];
            $userdetails['userdetails'] = Notification::where(['user_id'=>$user_id])->where(['id'=>$notification_id])->get();


            $dataList = [];
            $dataList['notify'] = NotificationTypeA::with('notification')->where(['notification_id'=>$notification_id])->get();
            return view('Notification.admin_notification_application', $userdetails, $dataList);
        }


        public function approveNotification(Request $request, $id){
            
            $notification = Notification::find($id);
            /*if ($value == 0){
            $notification->approved = '2';
            $notification->save();
        }else {
            $notification->approved = '1';
            $notification->save();
        }*/
        $notification->approved = $request->get('type');
        $notification->save();
        //dd($notification);
            return redirect()->route('admin.notification_list');
        }


        public function sendNotificationToSuperAdmin($id){
            
            $notification = Notification::find($id);
            $notification->approved = '1';
            $notification->save();
            return redirect()->route('admin.notification_list');
        }
}