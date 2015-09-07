<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  // Specify the table name in the DB
  protected $table = 'comments';

  // In Rails, this is called "strong params"
  protected $fillable = ['title','body','post_id'];

  public function post()
  {
    return $this->hasOne('App\Post');
  }
}