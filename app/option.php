<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
  /**
   * Return the relationship between question and options.
   *
   * @return question
   */
   public function question(){
     return $this->belongsTo(option::question);
   }
}
