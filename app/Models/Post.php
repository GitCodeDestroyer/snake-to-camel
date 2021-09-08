<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
    First Way: with eloquence package
*/
use \Eloquence\Behaviours\CamelCasing;

class Post extends Model
{
    use HasFactory;
    use CamelCasing;

    /**
     * user
     *
     * @return void
     */
    public function user() {
        return $this->belongsTo(Post::class);
    }
}
