<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Role;

use Auth;

class UserController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    // $users = DB::table('users')->get();
    // $users = User::with('roles')->get();
    $users = User::with('roles')->paginate(15);
    return view('users.index',compact('users'));
  }

  /**
  * Show the application dashboard.
  *
  * @return view
  */
  public function show(){
    $relations = [
    'roles' => Role::all(),
    ];

    $user = User::findOrFail($id);
    return view('users.show',compact('user') + $relations);
  }

  /**
  * Show the form for editing the specified user.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id){
    $relations = [
    'roles' => Role::all(),
    ];

    $user = User::findOrFail($id);
    //$user =  Auth::user();
    return view('users.edit',compact('user') + $relations);
  }

  /**
  * Update the specified user in storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function update($id){
    $user = User::findOrFail($id);
    // print_r($user->email);
    // die();
    // dd($user);
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email|unique:users,email,'.$id,
      'password' => 'required|min:6|confirmed'
    ]);

    $user->name = Request::input('name');
    $user->email = Request::input('email');
    $user->password = bcrypt(Request::input('password'));
    $user->update();
    // Flash::message('Your account has been updated!');
    return redirect()->route('users.index')->with('success_msg','Your account has been updated!');
  }

  /**
  * Update the specified user in storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function toggle($id){
    $user = User::findOrFail($id);
    $user->active = !($user->active);
    $user->save();
    return redirect()->route('users.index');
  }

  /**
  * Update the specified user in storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function resetPassword($id){
    $user = User::findOrFail($id);
    $user->password = bcrypt('batman');
    $user->save();
    return redirect()->route('users.index');
  }
}
