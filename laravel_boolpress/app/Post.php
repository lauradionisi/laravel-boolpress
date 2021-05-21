<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'topic', 'description', 'slug', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
