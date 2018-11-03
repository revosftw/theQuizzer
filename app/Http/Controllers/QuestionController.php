<?php

namespace App\Http\Controllers;

use App\Question;
use App\Topic;
use App\Option;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
    public function index()
    {
        $questions = Question::with('topic')->paginate(config('app.items_per_page',15));;
        return view('questions.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
          'topics' => Topic::all(),
        ];

        return view('questions.create', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question();

        $requestValidated = $request->validate([
          'question_text' => 'required'
        ]);

        $question->question_text = request()->question_text;
        $question->answer_explanation = request()->answer_explanation;
        $question->save();

        $arrOptions = array();
        $options = request()->option;
        foreach ($options as $option){
          $tmpOption = new Option();
          $tmpOption->isAnswer=isset($option['isAnswer'])?TRUE:FALSE;
          $tmpOption->option_text = $option['option_text'];
          array_push($arrOptions, $tmpOption);
        }

        $question->options()->saveMany($arrOptions);

        $topic = request()->topic;
        $topic = Topic::findOrFail($topic);
        $question->topic()->associate($topic);
        $question->save();

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $relations = [
        'topics' => Topic::all(),
        ];
        $question = Question::with('topic')->with('options')->findOrFail($question->id);

        return view('questions.edit', compact('question') + $relations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question = Question::findOrFail($question->id);

        $requestValidated = $request->validate([
          'question_text' => 'required'
        ]);

        $topic = request()->topic;
        $topic = Topic::findOrFail($topic);
        $question->topic()->associate($topic);

        $options = request()->option;
        foreach ($options as $option){
          $tmpOption = Option::findOrFail($option['id']);
          $tmpOption->isAnswer=isset($option['isAnswer'])?TRUE:FALSE;
          $tmpOption->option_text = $option['option_text'];
          $tmpOption->update();
        }

        $question->update(request()->all());
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        Question::findOrFail($question->id)->delete();
        return redirect()->route('questions.index')->with('success', 'Information has been removed');
    }

    /**
     * Store many newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $question = new Question();

        $requestValidated = $request->validate([
          'question_text' => 'required'
        ]);

        $question->question_text = request()->question_text;
        $question->answer_explanation = request()->answer_explanation;
        $question->save();

        $arrOptions = array();
        $options = request()->option;
        foreach ($options as $option){
          $tmpOption = new Option();
          $tmpOption->isAnswer=isset($option['isAnswer'])?TRUE:FALSE;
          $tmpOption->option_text = $option['option_text'];
          array_push($arrOptions, $tmpOption);
        }

        $question->options()->saveMany($arrOptions);

        $topic = request()->topic;
        $topic = Topic::findOrFail($topic);
        $question->topic()->associate($topic);
        $question->save();

        return redirect()->route('questions.index');
    }
}
