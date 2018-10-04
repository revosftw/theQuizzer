<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
  /**
   * Set to null if empty
   * @param $input
   */
  public function setisAnswerAttribute($input){
      $this->attributes['isAnswer'] = $input ? $input : false;
  }
  /**
   * Return the relationship between question and options.
   *
   * @return Question
   */
   public function question(){
     return $this->belongsTo(Question::class);
   }
}
