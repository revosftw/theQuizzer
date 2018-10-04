<?php

use Illuminate\Database\Seeder;
Use App\Question;
Use App\Option;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Clear table data
      Question::query()->delete();

      // Create a question
      $sampleQuestion = new Question();
      $sampleQuestion->question_text = 'Sample Single Answer Question';
      $sampleQuestion->answer_explanation = 'Sample Explaination';
      $sampleQuestion->save();

      // Create options
      $optionA = new Option();
      $optionA->option_text = 'Option 1';
      $optionA->isAnswer = true;

      $optionB = new Option();
      $optionB->option_text = 'Option 2';
      $optionB->isAnswer = false;

      $optionC = new Option();
      $optionC->option_text = 'Option 3';
      $optionC->isAnswer = false;

      $optionD = new Option();
      $optionD->option_text = 'Option 4';
      $optionD->isAnswer = false;

      $options = array($optionA, $optionB, $optionC, $optionD);

      $sampleQuestion->options()->saveMany($options);
    }
}
