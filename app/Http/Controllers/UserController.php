<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Notifications\NewUserAdded;

use App\User;
use Hash;

class UserController extends Controller
{

    use Notifiable;
    public function __construct(){
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::orderBy('id','DESC')->paginate(5);
        return view('pages.userList',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->userContact = $request->userContact;
            $user->userFax = $request->userFax;
            $user->userAddress = $request->userAddress;
            $user->userInstitution = $request->userInstitution;
            $user->userDesignation = $request->userDesignation;
            $user->userFaculty = $request->userFaculty;
            $user->userInstitutionID = $request->userInstitutionID;
            $user->password = bcrypt($request['password']);
            $user->save();

            $user->notify(new NewUserAdded($user->name));

            //dd($user);
        return redirect()->route('admin.userList')->with('message', 'We have notified '.$user->name.' that he/she is added to SSBC')->with('status', 'info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.showUserProfile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.updateUserProfile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        User::find($id)->update($request->all());
        return redirect()->route('profile.show', auth()->user()->id)
                        ->with('success','profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }


    public function updatePassword(Request $request, $id){
        $password = Input::get('password');

        $oldpassword = User::find($id)->password;

        $newpassword = Input::get('newpassword');



        if (Hash::check($password, $oldpassword)){

            $user = User::find($id);
            $user->password = bcrypt($request['newpassword']);
            $user->save();

            return redirect()->route('profile.show', auth()->user()->id)
                        ->with('success','password updated successfully');

            //var_dump('password match');
        }else{
            var_dump('does not match');
        }
        //dd($newpassword);
    }

}
