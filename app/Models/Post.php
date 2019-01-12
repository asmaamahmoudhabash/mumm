<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('title', 'body', 'access', 'is_published', 'order', 'category_id', 'image');

}
