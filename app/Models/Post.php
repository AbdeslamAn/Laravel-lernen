<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $table = 'post';
    protected $fillable = ['title', 'body', 'published']; // fields that can be updates

    protected $guarded = ['id']; // cannot be updates/assigned
}
