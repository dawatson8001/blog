<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['id', 'post_id', 'title', 'author', 'email', 'content'];

    public function replies(){

        return $this->hasMany('App\CommentReply');

    }

    public function post(){
        return $this->belongsTo('App\Post');
    }


}
