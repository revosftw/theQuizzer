<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 *
 * @package App
 * @property string $topic
 * @property text $question_text
 * @property text $answer_explanation
 *
*/
class Question extends Model
{
  use SoftDeletes;

  protected $fillable = ['question_text','answer_explanation','for_mock','topic_id'];

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTopicIdAttribute($input){
        $this->attributes['topic_id'] = $input ? $input : null;
    }

   /**
    * Return the relationship between question and options.
    *
    * @return Option
    */
    public function options(){
      return $this->hasMany(Option::class);
    }

    /**
     * Return the relationship between question and category.
     *
     * @return Topic
     */
     public function topic(){
       return $this->belongsTo(Topic::class);
     }
}
