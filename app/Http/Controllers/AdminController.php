<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\User;

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

        public function goToRegister(){
            return view('pages.addUser');
        }

        public function create(Request $request){
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->userContact = $request->userContact;
            $user->userFax = $request->userFax;
            $user->userAddress = $request->userAddress;
            $user->userInstitution = $request->userInstitution;
            $user->userRole = $request->userRole;
            $user->userProgram = $request->userProgram;
            $user->password = $request->password;
            $user->save();

            return view('pages.admin');
        }
        
        public function getuserList() 
        {
            $users = User::all();
            return view('pages.userList', ['users' => $users]);
        }

        public function destroy($id) {
            $user = User::find($id);
            $user->delete();

           return redirect()->back();
        }
        
        public function userDetails()
        {

        }
}