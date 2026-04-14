<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $table = 'post';
    protected $fillable = ['title', 'body', 'author', 'published']; // fields that can be updates

    protected $guarded = ['id']; // cannot be updates/assigned

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
