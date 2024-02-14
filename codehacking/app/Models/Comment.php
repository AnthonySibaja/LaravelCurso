<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id',
     'author', 'email', 'photo', 'body','is_active'];

    public function replies(){
        return $this->hasMany('App\Models\CommentReply');
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
