<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
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
  * Show the application dashboard.
  *
  * @return view
  */
  public function show(){
    //$users = DB::table('users')->get();
    //$users = User::all();
    $users = User::with('roles')->get();
    return view('users.index',compact('users'));
  }

  /**
  * Show the form for editing the specified user.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id){
    $user = User::find($id);
    //$user =  Auth::user();
    return view('users.edit',compact('user'));
  }

  /**
  * Update the specified user in storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function update($id){
    $user = User::find($id);

    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6|confirmed'
    ]);

    $user->name = Input::get('name');
    $user->email = Input::get('email');
    $user->password = bcrypt(Input::get('password'));
    $user->save();
    return Redirect::to(route('users'));
  }

  /**
  * Update the specified user in storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function activate($id){
    $user = User::find($id);
    if($user->active == true){
      $user->active = false;
    }
    else {
      $user->active = true;
    }
    $user->save();
    return redirect()->route('users');
  }

  /**
  * Update the specified user in storage.
  *
  * @param  int  $id
  * @return Response
  */
  public function resetPassword($id){
    $user = User::find($id);
    $user->password = bcrypt('batman');
    $user->save();
    return redirect()->route('users');
  }
}
