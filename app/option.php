<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
  /**
   * Return the relationship between question and options.
   *
   * @return Question
   */
   public function question(){
     return $this->belongsTo(Question::class);
   }
}
