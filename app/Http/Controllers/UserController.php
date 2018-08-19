<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return view
     */
    public function showAllUsers(){
    	//$users = DB::table('users')->get();
    	//$users = User::all();
        $users = User::with('roles')->get();
        return view('users.index',compact('users'));
    }

/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function editUser(){
    	$users = DB::table('users')->get();
    	return view('users.index',['users' => $users]);
    }    
}
