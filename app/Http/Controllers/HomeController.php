<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Question;
use App\Exam;

class HomeController extends Controller
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


    $relations = [
      // User Summary
      'countUsers' => User::all()->count(),
      'countActiveUser' => User::where('active', true)->count(),
      'countStudent' => User::whereHas('roles', function($query){$query->where('name', 'student');})->where('active', true)->count(),
      'countTeacher' => User::whereHas('roles', function($query){$query->where('name', 'teacher');})->where('active', true)->count(),
      'countAdministrator' => User::whereHas('roles', function($query){$query->where('name', 'administrator');})->where('active', true)->count(),

      // Question Summary
      'questionsCount' => Question::all()->count(),
      'practiceQuestionsCount' => Question::where('for_mock', false)->count(),
      'mockQuestionsCount' => Question::where('for_mock', true)->count(),
      'recentQuestionsCount' => Question::all()->count(),

      // Exam Summary
      'examsCount' => '186',
      'lastExamDate' => '15-08-2018',
      'lastExamAttendance' => '23',
      'lastExamAverage' => '67%',
      'nextExamDate' => '22-08-2018',
    ];

    return view('home', $relations);
  }
}
