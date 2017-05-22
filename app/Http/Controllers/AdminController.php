<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Notification;
use App\NotificationTypeA;
use App\Admin;
use App\EDForm1;
use App\EDFormB2;
use App\EDFormB3;
use App\EDFormB3_2;
use App\EDFormB4;

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
                $declined['declinedData'] = Notification::where(['approved'=> -1])->get();
                    
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


        public function approveNotification(Request $request, $id){
            
            $notification = Notification::find($id);
            $notification->approved = $request->get('type');
            $notification->save();
            return redirect()->route('admin.notification_list');
        }

         public function adminClearenceList(){
                
                $admin = [];
                $admin['admin']= Admin::where('id', Auth::user()->id)->get();

                $clearence = [];
                $clearence['clearence'] = EDForm1::where(['approved'=>0])->get();

                $approvedData = [];
                $approvedData['approvedData'] = EDForm1::where(['approved'=>2])->with('user')->get();

                $sendData = [];
                $sendData['sendData'] = EDForm1::where(['approved'=>1])->with('user')->get();

                $declined = [];
                $declined['declined'] = EDForm1::where(['approved'=> -1])->get();
                    
                // dd($approvedData, $sendData, $declined );
                return view('Clearence.clearence_admin', compact('admin', 'clearence', 'approvedData', 'sendData', 'declined'));
            
        }

        public function adminGetEachClearence($user_id, $id){


            $userdetail = [];
            $userdetail = EDForm1::where(['user_id'=>$user_id])->where(['id'=>$id])->get();
            
             $edform2 = [];
             $edform2 = EDFormB2::where(['ed_form_id'=>$user_id])->where(['id'=>$id])->get();

             $edform3 = [];
             $edform3 = EDFormB3::where(['ed_form_id'=>$user_id])->where(['id'=>$id])->get();

             $edform3_2 = [];
             $edform3_2 = EDFormB3_2::where(['ed_form_id'=>$user_id])->where(['id'=>$id])->get();

             $edform4 = [];
             $edform4 = EDFormB4::where(['ed_form_id'=>$user_id])->where(['id'=>$id])->get();

            // return response($edform3);
            //dd(  $edform2);

            return view('Clearence.admin_clearence_application', compact('userdetail', 'edform2', 'edform3', 'edform3_2', 'edform4'));
        }

        public function show2($id){
            $admin = Admin::find($id);
            return view('admin.showAdminProfile', compact('admin'));
        }

        public function approveClearence(Request $request, $id){
            
            $clearence = EDForm1::find($id);
            $clearence->approved = $request->get('type');
            $clearence->save();
            return redirect()->route('Clearence.clearence_admin');
        }

}