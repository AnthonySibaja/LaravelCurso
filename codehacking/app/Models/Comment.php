<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'post_id',
        'author',
        'email',
        'body',
        'is_active'
    ];
    public function replices(){
        return $this->hasMany('App\Models\CommentReply');
    }
}
