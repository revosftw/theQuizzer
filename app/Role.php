<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 *
 * @package App
 * @property string $name
 * @property string $description
*/

class Role extends Model
{
  use SoftDeletes;
  protected $fillable = ['name','description','function_id'];
  public function users(){
    return $this->belongsToMany(User::class);
  }
}
