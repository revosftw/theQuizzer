<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   /**
    * Return the relationship between question and options.
    *
    * @return Option
    */
    public function options(){
      return $this->hasMany(Option::class);
    }
}
