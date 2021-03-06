<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\question;

class QuestionController extends Controller
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
   *
   * @return view
   */
  public function index(){
      $questions = question::all();
      return view('questions.index',compact('questions'));
  }

  /**
   * Show the form for editing the specified question.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $question = question::find($id);
    return view('questions.index',['questions' => $questions]);
  }

  /**
   * Update the specified question in storage.
   *
   * @param int $id
   * @return Response
   */
  public function update($id){
    $question = question::find($id);

    $this->validate(request(), [
      'text' => 'required'
    ]);

    $question->text = Input::get('text');
    $question->save();
    return Redirect::to()->route('questions');
  }
}
