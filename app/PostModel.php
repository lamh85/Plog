<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
  // Specify the table name in the DB
  protected $table = 'posts';

  // In Rails, this is called "strong params"
  protected $fillable = ['title','body'];
}
