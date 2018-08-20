<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    // $this->middleware('auth');
  }

  /**
  * Redirect if already logged in.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(){
    if(Auth::check()){
      return $this->home();
    }
    else {
      return view('welcome');
    }
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function home(){
    // Login Check using middleware
    $this->middleware('auth');

    // Declare the dashboard variables

    // User Summary
    $countUsers = User::all()->count();
    $countActiveUser = User::where('active', true)->count();
    $countStudent = User::whereHas('roles', function($query){$query->where('name', 'student');})->where('active', true)->count();
    $countTeacher = User::whereHas('roles', function($query){$query->where('name', 'teacher');})->where('active', true)->count();
    $countAdministrator = User::whereHas('roles', function($query){$query->where('name', 'administrator');})->where('active', true)->count();

    return view('home',compact('countUsers','countActiveUser','countStudent','countTeacher','countAdministrator'));
  }
}
