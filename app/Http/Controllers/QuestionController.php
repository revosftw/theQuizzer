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
      $questions = Question::all();
      return view('questions.index',compact('questions'));
  }

  /**
   * Update the specified question in storage.
   *
   * @param int $id
   * @return Response
   */
  public function create(){
    $question = new question();

    $this->validate(request(), [
      'text' => 'required'
    ]);

    $question->text = Input::get('text');
    $question->save();
    return Redirect::to()->route('questions');
  }

  /**
   * Show the form for editing the specified question.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id){
    $question = Question::findOrFail($id);
    return view('questions.index',compact('question'));
  }

  /**
   * Update the specified question in storage.
   *
   * @param int $id
   * @return Response
   */
  public function update($id){
    $question = Question::findOrFail($id);

    $this->validate(request(), [
      'text' => 'required'
    ]);

    $question->text = Input::get('text');
    $question->save();
    return Redirect::to()->route('questions');
  }

  /**
   * Update the specified question in storage.
   *
   * @param int $id
   * @return Response
   */
   public function toggle($id){
     $question = Question::findOrFail($id);
     if($question->mock==false){
       $question->mock = true;
     }
     else{
        $question->mock=false;
      }
      return Redirect::back();
   }
}
