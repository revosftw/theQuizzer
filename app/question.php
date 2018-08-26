<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
   /**
    * Return the relationship between question and options.
    *
    * @return options
    */
    public function options(){
      return $this->hasMany(option::class);
    }

    /**
     * Return the relationship between question and actions.
     *
     * @return answer
     */
     public function answers(){
       return $this->hasMany(answer::class);
     }
}
