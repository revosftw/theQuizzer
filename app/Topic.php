<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 *
 * @package App
 * @property string $name
 * @property string $description
*/

class Topic extends Model
{
  protected $fillable = ['name','description'];
    public function questions(){
      return $this->belongsToMany(Question::class);
    }
}
