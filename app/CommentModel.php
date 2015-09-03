<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
  // Specify the table name in the DB
  protected $table = 'comments';

  // In Rails, this is called "strong params"
  protected $fillable = ['title','body'];

  public function post()
  {
    return $this->hasOne('App\PostModel');
  }
}