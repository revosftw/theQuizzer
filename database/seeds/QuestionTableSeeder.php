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
      $sampleQuestion->text = 'Sample Single Answer Question';
      $sampleQuestion->save();

      // Create options
      $optionA = new Option();
      $optionA->text = 'Option 1';
      $optionA->isAnswer = true;

      $optionB = new Option();
      $optionB->text = 'Option 2';
      $optionB->isAnswer = false;

      $optionC = new Option();
      $optionC->text = 'Option 3';
      $optionC->isAnswer = false;

      $optionD = new Option();
      $optionD->text = 'Option 4';
      $optionD->isAnswer = false;

      $sampleQuestion->options()->saveMany([$optionA, $optionB, $optionC, $optionD]);
    }
}
