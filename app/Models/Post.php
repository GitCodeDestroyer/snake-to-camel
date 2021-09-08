<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(Post::class);
    }

    /*
        Second Way: hard and stupid
    */

    public function postTitle() {
        return $this->post_title;
    }

    public function postBody() {
        return $this->post_body;
    }
}
