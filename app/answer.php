<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
  /**
   * Return the relationship between question and answers.
   *
   * @return question
   */
   public function question(){
     return $this->belongsTo(question::class);
   }
}
