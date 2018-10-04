<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Clear the table
        Topic::query()->delete();

      // Create a sample topic
        $sampleTopic = new Topic();
        $sampleTopic->name = 'Sample Topic';
        $sampleTopic->description = 'Sample Topic Description';
        $sampleTopic->save();
    }
}
