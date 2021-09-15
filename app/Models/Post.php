<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo('App\Models\Users');
    }

    public static function getPosts() {
        $posts = Post::all();
        return $posts;
    }

    public static function getPost($id) {
        $post = Post::find($id);
        return $post;
    }

    public static function getNotApprovedPosts() {
        $posts = Post::all()->where('post_status', '=', '0');
        return $posts;

    }

    public static function getApprovedPosts() {
        $posts = Post::all()->where('post_status', '=', '1');
        return $posts;
    }

}
