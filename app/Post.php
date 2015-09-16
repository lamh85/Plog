<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // Specify the table name in the DB
  protected $table = 'posts';

  // In Rails, this is called "strong params"
  protected $fillable = ['title','body'];

  public function comments()
  {
    return $this->hasMany('App\Comment');
  }

  // In ruby, a "static method/variable" is called a "class variable/method"
  public static $rules = array(
    'title' => 'required|unique',
    'body' => 'required'
    );
}