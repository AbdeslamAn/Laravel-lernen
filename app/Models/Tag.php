<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Tag extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; // UUID - Universel Unique Identfier

    public $incrementing = false;
    protected $table = 'tag';

    protected $fillable = ['title']; // fields that can be updates

    protected $guarded = ['id']; // cannot be updates/assigned

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
