<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['author', 'comment'];

    protected $guarded = ['id'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
